<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\MailVerification;
use App\Models\tbl_activitylog;
use App\Models\tbl_merchant_info;
use App\Mail\PasswordVerification;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_partner_accounts;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\tbl_merchant_document;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_merchant_application;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;
use App\Clients\SendGridClient;

class PartnerRegistration extends Controller
{
    //
    public function index(){
        return view('partner_application');
    }
    
    public function PersonalInfo(Request $request){
        
    }
    public function partner2index(){
        return view('/partner_application2');
    }
    public function PartnerForgotPass(){
        return view('partner_forgotpass');
    }
    public function PartnerForgetSend(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = tbl_partner_accounts::where('email', $request->email)->first();
          
        if($email){
            $code = mt_rand(1000, 9999);
            // $mailData = [
            // 'title' => 'Password Reset',
            // 'body' => 'test',
            // 'code' => $code,
            // 'fname' => $email->firstname,
            // 'lname' => $email->lastname,
            // ];
            // Mail::to($email)->send(new PasswordVerification($mailData));

            $html = view('email.forgotpass')->with('code', $code)->render();
            SendGridClient::sendEmail($request->email,"Password Reset", $html);

            $request->session()->put('partner_verification', $code);
            $request->session()->put('partner_email', $request->email);

            return redirect('/partner_forgotpass1');
         } 
         else{
            return back()->with('fail', 'Email does not exist');
         }
        
    }
     public function PartnerForgotPass2(){
        $email = tbl_partner_accounts::where('email', Session::get('partner_email'))
        ->first();
        
        return view('partner_forgotpass1', compact('email'));
     }

     public function PartnerForgotVerify(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $num3 = $request->num3;
        $num4 = $request->num4;
        if($num1. $num2 . $num3 . $num4 == Session::get('partner_verification')){
            return redirect('/partner_forgotpass2');
        }
        else{
            return back()->with('fail', 'Verification does not match');
        }
     }
     
     public function PartnerForgotResend(Request $request){
         $email = tbl_partner_accounts::where('email', Session::get('partner_email'))
          ->first();
          
        if($email){
            $code = mt_rand(1000, 9999);
            // $mailData = [
            // 'title' => 'Password Reset',
            // 'body' => 'test',
            // 'code' => $code,
            // 'fname' => $email->firstname,
            // 'lname' => $email->lastname,
            // ];
            // Mail::to($email)->send(new PasswordVerification($mailData));

            $receiverEmail = Session::get('partner_email');
            $html = view('email.forgotpass')->with('code', $code)->render();
            SendGridClient::sendEmail($receiverEmail, "Password Reset", $html);

            $request->session()->put('partner_verification', $code);

            return back();
        }
    }
     public function PartnerForgotPass3(){
        return view('partner_forgotpass2');
     }

     public function PartnerForgotReset(Request $request){
        $request->validate([
            'password' => [
            'required', 'confirmed',
            Password::min(8)->letters()->numbers()->symbols()
            ],
            'password_confirmation' => 'required'
        ]);
        if($request->password == $request->password_confirmation){
            $hash = Hash::make($request->password_confirmation);
            $res = tbl_partner_accounts::where('email', Session::get('partner_email'))
            ->update([
                'password' => $hash
            ]);
            if($res){
                Session::pull('partner_email');
                Session::pull('partner_verification');
                return redirect('/partner_forgotpass3');
            }
        }
        
       
     }
     public function PartnerForgotPass4(){
        return view('partner_forgotpass3');
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
            'postal_code' => 'required|min:4',
            'store_number' => 'required|min:10',
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
            
            $success = tbl_merchant_application::where('merchant_id', $request->merchant_id)
                ->update([
                    'merchantinfo_id' => $id->merchantinfo_id,
                    'status' => 'second'
                ]);
            $status =  tbl_merchant_application::where('merchant_id', $request->merchant_id)->first();
            if($success){
                $email = tbl_partner_accounts::where('merchant_id', Session::get('merchant_id'))->first();
                // dd($email);
                $code = mt_rand(100000, 999999);
                //   $mailData = [
                //     'title' => 'Account Verification',
                //     'body' => 'test',
                //     'code' => $code,
                //     'fname' => $email->firstname,
                //     'lname' => $email->lastname,
                // ];
                //  Mail::to($email)->send(new MailVerification($mailData));
                // dd($code);
                $html = view('email.emailverify')->with('code', $code)->render();
                
                SendGridClient::sendEmail($email->email, "Account Verification", $html);

                $request->session()->put('verification', $code);
                $request->session()->put('partnerstatus', $status->status);

                return redirect('/partner_application3');
            }
           
        }
        else{
         
        }


    }

    public function PartnerVerifyIndex(){
         $email = tbl_partner_accounts::where('merchant_id', Session::get('merchant_id'))
                        ->first();
      
         return view('partner_application3', compact('email'));
    }
    
    public function PartnerResendCode(Request $request){

        $email = tbl_partner_accounts::where('merchant_id', Session::get('merchant_id'))
                        ->first();
                        
         $code = mt_rand(100000, 999999);

        //  $mailData = [
        //  'title' => 'Account Verification',
        //  'body' => 'test',
        //   'code' => $code,
        //  'fname' => $email->firstname,
        //  'lname' => $email->lastname,
        // ];
        //  Mail::to($email)->send(new MailVerification($mailData));

        $html = view('email.emailverify')->with('code', $code)->render();
        SendGridClient::sendEmail($email->email, "Account Verification", $html);

         $request->session()->put('verification', $code);
        return back();
    }
    
    public function PartnerVerify(Request $request){
        
        $verify = $request->num1.$request->num2.$request->num3.$request->num4.$request->num5.$request->num6;
 
      if($verify == Session::get('verification')){
        Session::pull('verification');
       $res = tbl_merchant_application::where('merchant_id',  Session::get('merchant_id'))
        ->update([
            'status' => 'third'
        ]);
        if($res){
            $status =  tbl_merchant_application::where('merchant_id',Session::get('merchant_id'))
             ->first();
            
            $request->session()->put('partnerstatus', $status->status);
            return redirect('/partner_requirements');
        }
    }
    else{
         return back()->with('fail', 'Wrong verification code. Please try again!');
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
          
            $logo = $request->file('logo')->store('merchant_documents/'.$request->merchant_id.'', 's3', ['visibility', 'public']);
            $menu = $request->file('menu_photo')->store('merchant_documents/'.$request->merchant_id.'', 's3', ['visibility', 'public']);
            $file = $request->file('business_permit')->store('merchant_documents/'.$request->merchant_id.'', 's3', ['visibility', 'public']);
            $file2 = $request->file('bir_cert')->store('merchant_documents/'.$request->merchant_id.'', 's3', ['visibility', 'public']);
            $file3 = $request->file('barangay_permit')->store('merchant_documents/'.$request->merchant_id.'', 's3', ['visibility', 'public']);
            $file4 = $request->file('dti_cert')->store('merchant_documents/'.$request->merchant_id.'', 's3', ['visibility', 'public']);
            $file5 = $request->file('front_license')->store('merchant_documents/'.$request->merchant_id.'/valid_id', 's3', ['visibility', 'public']);
            $file6 = $request->file('back_license')->store('merchant_documents/'.$request->merchant_id.'/valid_id', 's3', ['visibility', 'public']);

            
            // $log = $logo->getClientOriginalName();
            // $photo = $menu->getClientOriginalName();
            // $permit = $file->getClientOriginalName();
            // $bir = $file2->getClientOriginalName();
            // $barangay = $file3->getClientOriginalName();
            // $dti = $file4->getClientOriginalName();
            // $front = $file5->getClientOriginalName();
            // $back = $file6->getClientOriginalName();

            $filename1 = Storage::disk('s3')->url($logo);
            $filename2 = Storage::disk('s3')->url($menu);
            $filename3 = Storage::disk('s3')->url($file);
            $filename4 = Storage::disk('s3')->url($file2);
            $filename5 = Storage::disk('s3')->url($file3);
            $filename6 = Storage::disk('s3')->url($file4);
            $filename7 = Storage::disk('s3')->url($file5);
            $filename8 = Storage::disk('s3')->url($file6);
         
            // $logo->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename1);
            // $menu->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename2);
            // $file ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename3);
            // $file2->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename4);
            // $file3 ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename5);
            // $file4->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id), $filename6);
            // $file5 ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id. '/'. 'valid id/'), $filename7);
            // $file6 ->move(('uploads/'. 'merchant_documents'. '/'.$request->merchant_id. '/'. 'valid id/'), $filename8);

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
            'status' => 'pending'
        ]);
        
         $status =  tbl_merchant_application::where('merchant_id', $request->merchant_id)
             ->first();
            
        $request->session()->put('partnerstatus', $status->status);
        return redirect('partner_application4');

        }
        else
        {
             return back()->with('fail', 'Something is wrong');
        }
    }

    public function LoginIndex(Request $request){
         $user = tbl_partner_accounts::where('email', '=', Cookie::get('partner_email'))->first();
         
        if(Cookie::get('partner_email') && Cookie::get('partner_password'))
        {   
              $status = tbl_merchant_application::where('merchant_id', $user->merchant_id)
                ->first();

                if($status->status == 'pending' || $status->status == 'Reviewing' || $status->status == 'Rejected'){
                    
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
        }
        else{
         return view('log_in');
        }
    }
    public function LoginMerchant(Request $request){

         $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);
       
        
        $user = tbl_partner_accounts::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                 if($request->remember){
                    $minutes = 5;
                    $response = new Response;
                    Cookie::queue(Cookie::forever('partner_email', $request->email, $minutes));
                    Cookie::queue(Cookie::forever('partner_password', $request->password, $minutes));
                }
                $status = tbl_merchant_application::where('merchant_id', $user->merchant_id)
                ->first();
                if($status->status == 'pending' || $status->status == 'Reviewing' || $status->status == 'Rejected'){
                    
                     $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
                    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
                    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
                    ->where('merchant_application.merchant_id',  $user->merchant_id)
                    ->limit(1)
                    ->get();
                    
                    $request->session()->put('partnerID', $user->merchant_id);
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
      public function PartnerLogout(){
        if(Session::has('partnerID')){
            Session::pull('partnerID');
            Cookie::queue(Cookie::forget('partner_email'));
            Cookie::queue(Cookie::forget('partner_password'));  
            return redirect('/');
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