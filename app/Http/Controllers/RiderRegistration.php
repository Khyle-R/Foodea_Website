<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\tbl_vehicle_infos;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_document;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Hash;
use App\Models\tbl_rider_application;
use Illuminate\Support\Facades\Session;


class RiderRegistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getAllData(){
        $Data = DB::table('admin_account')->get();
        return view('sample', compact('Data'));
    }
    
    public function index()
    {
        //
        return view('/rider_application');
    }
 
    public function addPostSubmit(Request $request)
    {
            $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:tbl_rider_account',
            'mobilenumber' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'address' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'zip' => 'required',
            'birthday' => 'required',
            'relationship' => 'required',
            'phone' => 'required',
            'name' => 'required'
            ]);

             $rider = new tbl_rider_accounts();
             $rider->firstname = $request-> firstname;
             $rider->middlename = $request-> middlename;
             $rider->lastname = $request-> lastname;
             $rider->suffix = $request->  suffix;
             $rider->age = $request->  age;
             $rider->gender = $request->  gender;
             $rider->email = $request-> email;
             $rider->password = Hash::make($request->password);
             $rider->mobile_number = $request-> mobilenumber;
             $rider->address = $request->  address;
             $rider->city = $request-> city;
             $rider->barangay = $request-> barangay;
             $rider->zip_code = $request->  zip;
             $rider->birthdate = $request-> birthday;
            $rider->emergency_name = $request-> name;
             $rider->relationship = $request-> relationship;
             $rider->contact_number = $request->  phone;
             //from database = input request
             $res = $rider -> save();
            
            if($res){

                $request->session()->put('rider_id', $rider->id);

                $id = new tbl_rider_application();
                $id->rider_id = Session::get('rider_id');
                $id->status = 'first';
                $id->save();
                
                return redirect('/rider_application2');
            }else{
                return back()->with('fail', 'Something is wrong');
            }

    }
    
    public function step2index(){
        return view('/rider_application3');
    }
    
    public function addVehicle(Request $request){
        $request -> validate([
            'vehicle_type' => 'required',
            'vehicle_ownership' => 'required',
            'plate_number' => 'required',
            'displacement' => 'required',
            'engine_number' => 'required',
            'year_model' => 'required'
        ]);
        $vehicle = new tbl_vehicle_infos();
        $vehicle->rider_id = $request->rider_id;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->vehicle_ownership = $request->vehicle_ownership;
        $vehicle->plate_number = $request->plate_number;
        $vehicle->displacement = $request->displacement;
        $vehicle->engine_number = $request->engine_number;
        $vehicle->year_model = $request->year_model;
        $res = $vehicle -> save();

        if($res){

            //Find rider_id in tbl_vehicle info
            $id = tbl_vehicle_infos::where('rider_id', $request->rider_id)->first();
         
            //update tbl_Rider_application to insert vehicle id that equals to rider_id
            tbl_rider_application::where('rider_id', $request->rider_id)
                ->update([
                    'vehicle_id' => $id->vehicle_id,
                    'status' => "second"
                ]);
              $vehicle = tbl_vehicle_infos::where('vehicle_ownership', $request->vehicle_ownership)
              ->distinct()
              ->value('vehicle_ownership');

               $request->session()->put('vehicle', $vehicle);
               
              return redirect('/rider_application4');
        }else{
             return back()->with('fail', 'Something is wrong');
        }
    }

    public function stepindex(){
        return view('/rider_application4');
    }
      public function SaveDocuments(Request $request){
        $request->validate([
            'image'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_front'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_side'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_back'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license_back'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'cr'=> 'required|mimes:pdf|max:5000',
            'or'=> 'required|mimes:pdf|max:5000',
            'nbi'=> 'required|mimes:pdf|max:5000'
        ]);
        
        $document = new tbl_rider_document();
        $document->rider_id = $request->rider_id;
      
        
        if($request->hasFile('vehicle_front') && $request->hasFile('license') && $request->hasFile('image') && $request->hasFile('cr') && $request->hasFile('or') && $request->hasFile('drug_test') && $request->hasFile('nbi') && $request->hasFile('vehicle_side') && $request->hasFile('vehicle_back') && $request->hasFile('license_back')){
            
           

            $vehicle = $request->file('vehicle_front');
            $file = $request->file('license');
            $file2 = $request->file('image');
            $file3 = $request->file('cr');
            $file4 = $request->file('or');
            $file5 = $request->file('drug_test');
            $file6 = $request->file('nbi');
            $file7 = $request->file('vehicle_side');
            $file8 = $request->file('vehicle_back');
            $file9 = $request->file('license_back');
            if(Session::get('vehicle') == 'Borrowed')
            {
            $file10 = $request->file('auth_letter');
            }
            if(Session::get('vehicle') == 'Second-hand')
            {
             $file12 = $request->file('deed_sale');
           }
            
            
            $photo = $vehicle->getClientOriginalName();
            $license = $file->getClientOriginalName();
            $image = $file2->getClientOriginalName();
            $cr = $file3->getClientOriginalName();
            $or = $file4->getClientOriginalName();
            $drug = $file5->getClientOriginalName();
            $nbi = $file6->getClientOriginalName();
            $side = $file7->getClientOriginalName();
            $back = $file8->getClientOriginalName();
            $license_back = $file9->getClientOriginalName();
             if(Session::get('vehicle') == 'Borrowed')
            {
            $auth = $file10->getClientOriginalName();
            }
            if(Session::get('vehicle') == 'Second-hand')
            {
             $deed = $file12->getClientOriginalName();
            }

            
            $filename1 = mt_rand(1000, 9999) . '_' .$photo;
            $filename2 = mt_rand(1000, 9999) . '_' .$license;
            $filename3 = mt_rand(1000, 9999) . '_' .$image;
            $filename4 = mt_rand(1000, 9999) . '_' .$cr;
            $filename5 = mt_rand(1000, 9999) . '_' .$or;
            $filename6 = mt_rand(1000, 9999) . '_' .$drug;
            $filename7 = mt_rand(1000, 9999) . '_' .$nbi;
            $filename8 = mt_rand(1000, 9999) . '_' .$side;
            $filename9 = mt_rand(1000, 9999) . '_' .$back;
            $filename10 =mt_rand(1000, 9999) . '_' .$license_back;
              if(Session::get('vehicle') == 'Borrowed')
            {
            $filename11 = mt_rand(1000, 9999) . '_' .$auth;
            }
            if(Session::get('vehicle') == 'Second-hand')
            {
            $filename13 = mt_rand(1000, 9999) . '_' .$deed;
            }

            $name = tbl_rider_accounts::where('rider_id', $request->rider_id)->first();
             
            $vehicle->move(('uploads/'. 'rider_documents'. '/'. $request->rider_id. '_'.$name->firstname. '_' .$name->lastname. '/' .'vehicle/'), $filename1);
            $file ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname. '/' .'driver license/'),  $filename2 );
            $file2->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname), $filename3);
            $file3 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname),  $filename4 );
            $file4->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname), $filename5);
            $file5 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname),  $filename6 );
            $file6 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname),  $filename7 );
            $file7->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname. '/' .'vehicle/'), $filename8);
            $file8 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname. '/' .'vehicle/'),  $filename9 );
            $file9 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname. '/' .'driver license/'),  $filename10 );
             if(Session::get('vehicle') == 'Borrowed')
            {
            $file10->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname), $filename11);
            }
              if(Session::get('vehicle') == 'Second-hand')
            {
            $file12 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname),  $filename13 );
            }

            $document->vehicle_front = $filename1;
            $document->driver_license =  $filename2;
            $document->rider_photo =  $filename3;
            $document->cert_registration =  $filename4;
            $document->official_receipt = $filename5;
            $document->drug_test =  $filename6;
            $document->nbi_clearance = $filename7;
            $document->vehicle_side =  $filename8;
            $document->vehicle_back =  $filename9;
            $document->license_back =  $filename10;
              if(Session::get('vehicle') == 'Borrowed')
            {
            $document->auth_letter =  $filename11;
            }
             if(Session::get('vehicle') == 'Second-hand')
            {
            $document->deed_sale =  $filename13;
            }
           
        }
        $success = $document->save();
        if($success){
            
            $id = tbl_rider_document::where('rider_id', $request->rider_id)->first();

            tbl_rider_application::where('rider_id', $request->rider_id)
                ->update([
                    'document_id' => $id->document_id,
                    'status' => "Pending"
                ]);
              
                  return redirect('/rider_application5');
        }
        else{
            return back()->with('fail', 'Something is wrong');
        }
      
    }
    
    public function step5index(Request $request){
        
        // $rider_id = Session::get('rider_id');
        
        // $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        // ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        // ->where('tbl_rider_account.rider_id', $rider_id)
        // ->limit(1)
        // ->get(['firstname', 'middlename', 'lastname', 'age', 'gender', 'email', 'mobile_number', 'city', 'vehicle_type', 'plate_number', 'displacement', 'engine_number', 'year_model']);
       
        // return view('/rider_applicationstatus', compact('Data'));
        return view('/partner_application5');
    }
    public function RiderApplicationStatus(){
        $id = Session::get('rider_id');
        
         $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->where('tbl_rider_account.rider_id', $id)
        ->limit(1)
        ->get();
        
        return view('rider_applicationstatus', compact('Data'));
    }
    public function agreement(){
        return view('/rider_application_agreement');
    }
   
    /* RIDER LOGIN */
    public function RiderLogIn(Request $request){
         $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);
        $user = tbl_rider_accounts::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){

                $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
                ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
                ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
                ->where('tbl_rider_account.rider_id', $user->rider_id)
                ->limit(1)
                ->get();
                
                $request->session()->put('registerID', $user->rider_id);
                return view('/rider_applicationstatus', compact('Data'));
            }else{
                  return back()->with('fail', 'Password does not match');
            }
        }else{
            return back()->with('fail', 'This is email is not registered');
        }
    }
    public function RiderLogout(){
        if(Session::has('registerID')){
            Session::pull('registerID');
            return redirect('/');
        }
    }
    }