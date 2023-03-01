<?php

namespace App\Http\Controllers;

use App\Models\tbl_activitylog;
use Illuminate\Http\Request;
use App\Models\tbl_merchant_info;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_partner_accounts;
use Illuminate\Support\Facades\Hash;
use App\Models\tbl_merchant_document;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_merchant_application;

class PartnerRegistration extends Controller
{
    //
    public function index(){
        return view('partner_application');
    }
    
    public function PersonalInfo(Request $request){
        $request-> validate([
            'salutation' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:tbl_merchant_account',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $merchant = new tbl_partner_accounts();
        $merchant->salutation = $request->salutation;
        $merchant->firstname = $request->firstname;
        $merchant->middlename = $request->middlename;
        $merchant->lastname = $request->lastname;
        $merchant->suffix = $request->suffix;
        $merchant->email = $request->email;
        $merchant->password = Hash::make($request->password);
        
        $res = $merchant->save();

        if($res){
            $request->session()->put('merchant_id', $merchant->id);

            $id = new tbl_merchant_application();
            $id->merchant_id = $merchant->id;
            $id->status = 'first';
            $id->save();
            
            return redirect('/partner_application2');
        }else{
            return back()->with('fail', 'Something is wrong');
        }
    }
    public function partner2index(){
        return view('/partner_application2');
    }

    public function partner2submit(Request $request){

         $request-> validate([
            'business_type' => 'required',
            'business_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'street' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'store_number' => 'required',
            'store_email' => 'required|email',
            'date_founded' => 'required',
            'mission' => 'required',
            'vision' => 'required'
        ]);

        $merchant = new tbl_merchant_info();
        $merchant->merchant_id = $request->merchant_id;
        $merchant->business_type = $request->business_type;
        $merchant->business_name = $request->business_name;
        $merchant->country = $request->country;
        $merchant->address = $request->address;
        $merchant->city = $request->city;
        $merchant->barangay = $request->barangay;
        $merchant->street = $request->street;
        $merchant->postal_code = $request->postal_code;
        $merchant->store_number = $request->store_number;
        $merchant->store_email = $request->store_email; 
        $merchant->date_founded = $request->date_founded; 
        $merchant->mission = $request->mission; 
        $merchant->vision = $request->vision; 
        $res = $merchant->save();
        if($res){
            
            $id = tbl_merchant_info::where('merchant_id', $request->merchant_id)->first();
            
            tbl_merchant_application::where('merchant_id', $request->merchant_id)
            ->update([
                'merchantinfo_id' => $id->merchantinfo_id,
                'status' => 'second'
            ]);
            return redirect('/partner_application3');
        }
        else{
         
        }


    }

    public function partnerrequirement(){
        return view('/partner_requirements');
    }

     public function SaveDocuments(Request $request){
        $request->validate([
            'logo'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'menu_photo'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'business_permit'=> 'required|mimes:pdf|max:5000',
            'bir_cert'=> 'required|mimes:pdf|max:5000',
            'barangay_permit'=> 'required|mimes:pdf|max:5000',
            'dti_cert'=> 'required|mimes:pdf|max:5000',
            'front_license'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'back_license'=> 'required|mimes:jpeg,png,jpg|max:5000'
            

        ]);
        $document = new tbl_merchant_document();
        $document->merchant_id = $request->merchant_id;
        
        if($request->hasFile('menu_photo') && $request->hasfile('logo') && $request->hasFile('business_permit') && $request->hasFile('bir_cert') && $request->hasFile('dti_cert') && $request->hasFile('front_license') && $request->hasFile('back_license')){
          
            $logo = $request->file('logo');
            $menu = $request->file('menu_photo');
            $file = $request->file('business_permit');
            $file2 = $request->file('bir_cert');
            $file3 = $request->file('barangay_permit');
            $file4 = $request->file('dti_cert');
            $file5 = $request->file('front_license');
            $file6 = $request->file('back_license');

            
            $log = $logo->getClientOriginalName();
            $photo = $menu->getClientOriginalName();
            $permit = $file->getClientOriginalName();
            $bir = $file2->getClientOriginalName();
            $barangay = $file3->getClientOriginalName();
            $dti = $file4->getClientOriginalName();
            $front = $file5->getClientOriginalName();
            $back = $file6->getClientOriginalName();

            $filename1 = mt_rand(1000, 9999) . '_' .$log;
            $filename2 = mt_rand(1000, 9999) . '_' .$photo;
            $filename3 = mt_rand(1000, 9999) . '_' .$permit;
            $filename4 = mt_rand(1000, 9999) . '_' .$bir;
            $filename5 = mt_rand(1000, 9999) . '_' .$barangay;
            $filename6 = mt_rand(1000, 9999) . '_' .$dti;
            $filename7 = mt_rand(1000, 9999) . '_' .$front;
            $filename8 = mt_rand(1000, 9999) . '_' .$back;
         
            $logo->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename1);
            $menu->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename2);
            $file ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename3);
            $file2->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename4);
            $file3 ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename5);
            $file4->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename6);
            $file5 ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id. '/'. 'valid id/'), $filename7);
            $file6 ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id. '/'. 'valid id/'), $filename8);

            $document->logo = $filename1;
            $document->menu_photo = $filename2;
            $document->business_permit =  $filename3;
            $document->bir_cert = $filename4;
            $document->barangay_permit =  $filename5;
            $document->dti_cert = $filename6;
            $document->front_license =  $filename7;
            $document->back_license =  $filename8;

        }
        $success = $document->save();
        
        if($success){
            
        $id = tbl_merchant_document::where('merchant_id', $request->merchant_id)->first();
        
        tbl_merchant_application::where('merchant_id', $request->merchant_id)
        ->update([
            'merchant_document_id' => $id->merchant_document_id,
            'status' => 'Pending'
        ]);
        return redirect('partner_application4');

        }
        else
        {
             return back()->with('fail', 'Something is wrong');
        }
    }

    public function LoginIndex(){
        return view('log_in');
    }
    public function LoginMerchant(Request $request){

         $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);
        
        $user = tbl_partner_accounts::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $status = tbl_merchant_application::where('merchant_id', $user->merchant_id)
                ->first();
            
                if($status->status == 'Pending' || $status->status == 'Reviewing' || $status->status == 'Rejected'){
                    
                     $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
                    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
                    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
                    ->where('merchant_application.merchant_id',  $user->merchant_id)
                    ->limit(1)
                    ->get();
                    
                    return view('/partner_applicationstatus', compact('Data'));
                }
                else{
                $log = new tbl_activitylog();
                $log->merchant_id = $user->merchant_id;
                $log->email = $user->email;
                $log->name = $user->firstname. ' ' .$user->lastname;
                $log->description = 'Has Log In';
                $res = $log->save();
                if($res){
                $request->session()->put('loginID', $user->merchant_id);
                return redirect('/index');
                }
            
                }
            }else{
                  return back()->with('fail', 'Password does not match');
            }
        }else{
            return back()->with('fail', 'This is email is not registered');
        }
    }
    
     public function agreement(){
        return view('/merchant_application_agreement');
    }
    public function PartnerApplicationStatus(){
        $id = Session::get('merchant_id');

        $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->where('merchant_application.merchant_id',  $id)
    ->limit(1)
    ->get();
        
     return view('partner_applicationstatus', compact('Data'));

    }
}