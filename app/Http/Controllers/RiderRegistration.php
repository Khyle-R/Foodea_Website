<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\MailVerification;
use App\Mail\PasswordVerification;
use App\Models\tbl_activitylog;
use App\Models\tbl_merchant_account;
use App\Models\tbl_vehicle_infos;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_document;
use App\Models\tbl_partner_accounts;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\tbl_rider_application;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_merchant_application;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;
use App\Clients\SendGridClient;
use App\Models\tbl_admin_role;
use App\Models\tbl_merchant_info;

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
    
     public function RiderForgotPass(){
        return view('forgotpass');
    }
    public function RiderForgetSend(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

         $email = tbl_rider_accounts::where('email', $request->email)
          ->first();
         $merchant = tbl_partner_accounts::where('email', $request->email)
          ->first();

          if($email){
         $code = mt_rand(1000, 9999);

                       $mailData = [
                        'title' => 'Password Reset',
                        'body' => 'test',
                        'code' => $code,
                        'fname' => $email->firstname,
                        'lname' => $email->lastname,
                       ];
                       Mail::to($email)->send(new PasswordVerification($mailData));

                    // $html = view('email.forgotpass')->with('code', $code)->render();
                    // SendGridClient::sendEmail($request->email, "Password Reset", $html);

                    $request->session()->put('verification', $code);
                    $request->session()->put('email', $request->email);
                     return redirect('/rider_forgotpass1');
         } 
         if($merchant){
            $code = mt_rand(1000, 9999);

                       $mailData = [
                        'title' => 'Password Reset',
                        'body' => 'test',
                        'code' => $code,
                        'fname' => $merchant->firstname,
                        'lname' => $merchant->lastname,
                       ];
                       Mail::to($merchant)->send(new PasswordVerification($mailData));

                    $request->session()->put('verification', $code);
                    $request->session()->put('email', $request->email);
                     return redirect('/rider_forgotpass1');
         }
         else{
            return back()->with('fail', 'Email does not exist');
         }
        
    }
     public function RiderForgotPass2(){
        $email = tbl_rider_accounts::where('email', Session::get('email'))
        ->first();
        if($email){
            return view('rider_forgotpass1', compact('email'));
        }
        $merchant = tbl_partner_accounts::where('email', Session::get('email'))
        ->first();
        if($merchant){
            return view('rider_forgotpass1', compact('merchant'));
        }
     }

     public function RiderForgotVerify(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $num3 = $request->num3;
        $num4 = $request->num4;
        if($num1. $num2 . $num3 . $num4 == Session::get('verification')){
            return redirect('/rider_forgotpass2');
        }
        else{
            return back()->with('fail', 'Verification does not match');
        }
     }
     
     public function RiderForgotResend(Request $request){
         $email = tbl_rider_accounts::where('email', Session::get('email'))
          ->first();
          $merchant = tbl_partner_accounts::where('email', Session::get('email'))
          ->first();
          
          if($email){
         $code = mt_rand(1000, 9999);

                       $mailData = [
                        'title' => 'Password Reset',
                        'body' => 'test',
                        'code' => $code,
                        'fname' => $email->firstname,
                        'lname' => $email->lastname,
                       ];
                       Mail::to($email)->send(new PasswordVerification($mailData));

                    //    $receiverEmail = Session::get('email');
                    //    $html = view('email.forgotpass')->with('code', $code)->render();
                    //     SendGridClient::sendEmail($receiverEmail, "Password Reset", $html);

                    $request->session()->put('verification', $code);
                     return back();
     }
     if($merchant){
         $code = mt_rand(1000, 9999);

                       $mailData = [
                        'title' => 'Password Reset',
                        'body' => 'test',
                        'code' => $code,
                        'fname' => $merchant->firstname,
                        'lname' => $merchant->lastname,
                       ];
                       Mail::to($merchant)->send(new PasswordVerification($mailData));

                    $request->session()->put('verification', $code);
                     return back();
     }
    }
    
     public function RiderForgotPass3(){
        return view('rider_forgotpass2');
     }

     public function RiderForgotReset(Request $request){
        $request->validate([
            'password' => [
            'required', 'confirmed',
            Password::min(8)->letters()->numbers()->symbols()
            ],
            'password_confirmation' => 'required'
        ]);
        if($request->password == $request->password_confirmation){
            $hash = Hash::make($request->password_confirmation);
            
            $res = tbl_rider_accounts::where('email', Session::get('email'))
             ->first();
          
            if($res){
                 tbl_rider_accounts::where('email', Session::get('email'))
                 ->update([
                'password' => $hash
            ]);
                Session::pull('email');
                Session::pull('verification');
                return redirect('/rider_forgotpass3');
            }
            else{
                tbl_partner_accounts::where('email', Session::get('email'))
                 ->update([
                'password' => $hash
            ]);
                Session::pull('email');
                Session::pull('verification');
                return redirect('/rider_forgotpass3');
            }
        }
        
       
     }
     public function RiderForgotPass4(){
        return view('rider_forgotpass3');
     }
    public function index()
    {
        //
        return view('/rider_application');
    }
 
    public function addPostSubmit(Request $request)
    {   
     
            $request->validate([
            'account_type' => 'required',    
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'mobilenumber' => 'required|min:10',
            'password' => [
            'required', 'confirmed',
            Password::min(8)->letters()->numbers()->symbols()
            ],
            'password_confirmation' => 'required',
            'address' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'zip' => 'required|min:4',
            'birthday' => 'required|date|after: 17 year old',
          
        ]
        );
            
              if($request->age < 18){
                return back()->with('age','Age must be 18 above');
            }
            if($request->age >= 56){
                return back()->with('age','Age must be 55 below');
            }
              /*RIDERS */
            if($request->account_type == 'Rider'){
              $request->validate([
            'email' => 'required|email|unique:tbl_rider_account|unique:tbl_merchant_account',
          
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
             //from database = input request
             $res = $rider -> save();
            
            if($res){

                $request->session()->put('rider_id', $rider->id);

                $id = new tbl_rider_application();
                $id->rider_id = Session::get('rider_id');
                $id->status = 'first';
                $id->save();
                if($id)
                {
                    $email = tbl_rider_accounts::where('rider_id', Session::get('rider_id'))
                        ->first();
                        
                        $code = mt_rand(100000, 999999);
                       $mailData = [
                        'title' => 'Account Verification',
                        'body' => 'test',
                        'code' => $code,
                        'fname' => $email->firstname,
                        'lname' => $email->lastname,
                       ];
                    Mail::to($email)->send(new MailVerification($mailData));

                    // $html = view('email.emailverify')->with('code', $code)->render();
                    // SendGridClient::sendEmail($request->email, "Account Verification", $html);

                    $request->session()->put('verification', $code);
                     $request->session()->put('status', $id->status);
                     return redirect('/rider_application2');
                }
               
            }
            else{
                return back()->with('fail', 'Something is wrong');
            }
        }
        
        /*MERCHANT */
        if($request->account_type == 'Partner Merchant'){
           $request->validate([
            'email' => 'required|email|unique:tbl_merchant_account|unique:tbl_rider_account|',
              ]);
  

        $merchant = new tbl_partner_accounts();
        $merchant->firstname = $request->firstname;
        $merchant->middlename = $request->middlename;
        $merchant->lastname = $request->lastname;
        $merchant->suffix = $request->suffix;
        $merchant->age = $request->  age;
        $merchant->gender = $request->  gender;
        $merchant->birthdate = $request-> birthday;
        $merchant->email = $request->email;
        $merchant->password = Hash::make($request->password);
        $merchant->mobile_number = $request-> mobilenumber;
        $merchant->address = $request->  address;
        $merchant->city = $request-> city;
        $merchant->barangay = $request-> barangay;
        $merchant->zip_code = $request->  zip;
         $merchant->role = 'Admin';

        $res = $merchant->save();
        if($res){
            $request->session()->put('merchant_id', $merchant->id);

            $id = new tbl_merchant_application();
            $id->merchant_id = $merchant->id;
            $id->status = 'first';
            $id->save();

            $request->session()->put('partnerstatus', $id->status);
            return redirect('/partner_application2');
            
          
        }else{
            return back()->with('fail', 'Something is wrong');
        }
        }
        else{
            return back();
        }
    }
    
    /*EMAIL VERIFICATION */
    public function VerifyRider(Request $request){
      $email = tbl_rider_accounts::where('rider_id', Session::get('rider_id'))
                        ->first();
      
        return view('rider_application2', compact('email'));
    }
    
    public function ResendCode(Request $request){

        $email = tbl_rider_accounts::where('rider_id', Session::get('rider_id'))
                        ->first();
                        
         $code = mt_rand(100000, 999999);

                       $mailData = [
                        'title' => 'Account Verification',
                        'body' => 'test',
                        'code' => $code,
                        'fname' => $email->firstname,
                        'lname' => $email->lastname,
                       ];
                       Mail::to($email)->send(new MailVerification($mailData));

                        // $html = view('email.emailverify')->with('code', $code)->render();
                        // SendGridClient::sendEmail($email->email, "Account Verification", $html);

                    $request->session()->put('verification', $code);
                     return back();
    }

    public function RiderVerify(Request $request){
      
      $verify = $request->num1.$request->num2.$request->num3.$request->num4.$request->num5.$request->num6;
 
      if($verify == Session::get('verification')){
        Session::pull('verification');
      $res =  tbl_rider_application::where('rider_id', Session::get('rider_id'))
                ->update([
                    'status' => "second"
                ]);
                
      if($res){
        $status = tbl_rider_application::where('rider_id', Session::get('rider_id'))
        ->first();
        
         $request->session()->put('status', $status->status);
         return redirect('/rider_vehicle_type');
      }
    }
    else{
        return back()->with('fail', 'Wrong verification code. Please try again!');
    }
    }

    public function VehicleType(){
         return view('/rider_vehicle_type');
    }

    public function AddVehicleType(Request $request){
        $request -> validate([
            'vehicle_type' => 'required',
            'relationship' => 'required',
            'phone' => 'required|min:10',
            'name' => 'required'
        ]);
        $vehicle = new tbl_vehicle_infos();
        $vehicle->rider_id = $request->rider_id;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->emergency_name = $request-> name;
        $vehicle->relationship = $request-> relationship;
        $vehicle->contact_number = $request->  phone;
        $res = $vehicle->save();

        if($res){
            if($request->vehicle_type == 'Motorcycle'){
                
                 //Find rider_id in tbl_vehicle info
            $id = tbl_vehicle_infos::where('rider_id', $request->rider_id)->first();
         
            //update tbl_Rider_application to insert vehicle id that equals to rider_id
            tbl_rider_application::where('rider_id', $request->rider_id)
                ->update([
                    'vehicle_id' => $id->vehicle_id,
                    'status' => "vehicle_type"
                ]);
            $status = tbl_rider_application::where('rider_id', $request->rider_id)->first();
            $request->session()->put('status', $status->status);
            return redirect('/rider_application3');

            }
            
            if($request->vehicle_type == 'Bicycle'){
                  //Find rider_id in tbl_vehicle info
            $id = tbl_vehicle_infos::where('rider_id', $request->rider_id)->first();
         
            //update tbl_Rider_application to insert vehicle id that equals to rider_id
            tbl_rider_application::where('rider_id', $request->rider_id)
                ->update([
                    'vehicle_id' => $id->vehicle_id,
                    'status' => "bicycle"
                ]);
                $status = tbl_rider_application::where('rider_id', $request->rider_id)->first();
               $request->session()->put('status', $status->status);
                return redirect('/rider_bike_requirements');
            }
        }
        
    }
    
    public function step2index(){
    
        return view('/rider_application3');
    }
    
    public function addVehicle(Request $request){
        $request -> validate([
            'vehicle_ownership' => 'required',
            'plate_number' => 'required',
            'displacement' => 'required',
            'engine_number' => 'required',
            'year_model' => 'required',
        ]);


        $res = tbl_vehicle_infos::where('rider_id', $request->rider_id)
        ->update([
            'vehicle_ownership' => $request->vehicle_ownership,
            'plate_number' => $request->plate_number,
            'displacement' => $request->displacement,
            'engine_number' => $request->engine_number,
            'year_model' => $request->year_model,
        ]);

        if($res){

            //Find rider_id in tbl_vehicle info
            $id = tbl_vehicle_infos::where('rider_id', $request->rider_id)->first();
         
            //update tbl_Rider_application to insert vehicle id that equals to rider_id
            tbl_rider_application::where('rider_id', $request->rider_id)
                ->update([
                    'vehicle_id' => $id->vehicle_id,
                    'status' => "third"
                ]);
              $vehicle = tbl_vehicle_infos::where('vehicle_ownership', $request->vehicle_ownership)
              ->distinct()
              ->value('vehicle_ownership');

               $request->session()->put('vehicle', $vehicle);

               $status = tbl_rider_application::where('rider_id', $request->rider_id)->first();
               $request->session()->put('status', $status->status);
              return redirect('/rider_application4');
        }else{
             return back()->with('fail', 'Something is wrong');
        }
    }

    public function stepindex(){
        return view('/rider_application4');
    }
      public function SaveDocuments(Request $request){

         if(Session::get('vehicle') == 'Fully_owned'){
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
    }
        /* BORROWED */
        if(Session::get('vehicle') == 'Borrowed'){
         $request->validate([
            'image'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_front'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_side'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_back'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license_back'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'auth_letter'=> 'required|mimes:pdf|max:5000',
            'cr'=> 'required|mimes:pdf|max:5000',
            'or'=> 'required|mimes:pdf|max:5000',
            'nbi'=> 'required|mimes:pdf|max:5000'
        ]);
        }

         /* SECOND HAND */
          if(Session::get('vehicle') == 'Second-hand'){
         $request->validate([
            'image'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_front'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_side'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_back'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license_back'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'deed_sale'=> 'required|mimes:pdf|max:5000',
            'cr'=> 'required|mimes:pdf|max:5000',
            'or'=> 'required|mimes:pdf|max:5000',
            'nbi'=> 'required|mimes:pdf|max:5000'
        ]);
        }
        
        $document = new tbl_rider_document();
        $document->rider_id = $request->rider_id;
      
        
        if($request->hasFile('vehicle_front') && $request->hasFile('license') && $request->hasFile('image') && $request->hasFile('cr') && $request->hasFile('or') && $request->hasFile('nbi') && $request->hasFile('vehicle_side') && $request->hasFile('vehicle_back') && $request->hasFile('license_back')){

            $name = tbl_rider_accounts::where('rider_id', $request->rider_id)->first();

            $vehicle = $request->file('vehicle_front')->store('rider_documents/'.$request->rider_id.'/vehicle', 's3', ['visibility', 'public']);
            $file = $request->file('license')->store('rider_documents/'.$request->rider_id.'/driver_license', 's3', ['visibility', 'public']);
            $file2 = $request->file('image')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
            $file3 = $request->file('cr')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
            $file4 = $request->file('or')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
             if($request->hasFile('drug_test')){
            $file5 = $request->file('drug_test')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
             }
            $file6 = $request->file('nbi')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
            $file7 = $request->file('vehicle_side')->store('rider_documents/'.$request->rider_id.'/vehicle', 's3', ['visibility', 'public']);
            $file8 = $request->file('vehicle_back')->store('rider_documents/'.$request->rider_id.'/vehicle', 's3', ['visibility', 'public']);
            $file9 = $request->file('license_back')->store('rider_documents/'.$request->rider_id.'driver_license', 's3', ['visibility', 'public']);
            if($request->hasFile('auth_letter'))
            {
            $file10 = $request->file('auth_letter')->store('rider_documents/'.$request->rider_id.'_'.$name->firstname. '_' .$name->lastname, 's3', ['visibility', 'public']);
            }
            if(Session::get('vehicle') == 'Second-hand')
            {
             $file12 = $request->file('deed_sale')->store('rider_documents/'.$request->rider_id.'_'.$name->firstname. '_' .$name->lastname, 's3', ['visibility', 'public']);
           }
            
            
            // $photo = $vehicle->getClientOriginalName();
            // $license = $file->getClientOriginalName();
            // $image = $file2->getClientOriginalName();
            // $cr = $file3->getClientOriginalName();
            // $or = $file4->getClientOriginalName();
            //  if($request->hasFile('drug_test')){
            // $drug = $file5->getClientOriginalName();
            //  }
            // $nbi = $file6->getClientOriginalName();
            // $side = $file7->getClientOriginalName();
            // $back = $file8->getClientOriginalName();
            // $license_back = $file9->getClientOriginalName();
            // if($request->hasFile('auth_letter'))
            // {
            // $auth = $file10->getClientOriginalName();
            // }
            // if(Session::get('vehicle') == 'Second-hand')
            // {
            //  $deed = $file12->getClientOriginalName();
            // }

            
            $filename1 = Storage::disk('s3')->url($vehicle);
            $filename2 = Storage::disk('s3')->url($file);
            $filename3 = Storage::disk('s3')->url($file2);
            $filename4 = Storage::disk('s3')->url($file3);
            $filename5 = Storage::disk('s3')->url($file4);
             if($request->hasFile('drug_test')){
            $filename6 = Storage::disk('s3')->url($file5);
             }
            $filename7 = Storage::disk('s3')->url($file6);
            $filename8 = Storage::disk('s3')->url($file7);
            $filename9 = Storage::disk('s3')->url($file8);
            $filename10 = Storage::disk('s3')->url($file9);
             if($request->hasFile('auth_letter'))
            {
            $filename11 = Storage::disk('s3')->url($file10);
            }
            if(Session::get('vehicle') == 'Second-hand')
            {
            $filename13 = Storage::disk('s3')->url($file12);
            }

            
             
            // $vehicle->move(('uploads/'. 'rider_documents'. '/'. $request->rider_id.  '/' .'vehicle/'), $filename1);
            // $file ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '/' .'driver license/'),  $filename2 );
            // $file2->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id), $filename3);
            // $file3 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id),  $filename4 );
            // $file4->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id), $filename5);
            //  if($request->hasFile('drug_test')){
            // $file5 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id),  $filename6 );
            //  }
            // $file6 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id),  $filename7 );
            // $file7->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id.  '/' .'vehicle/'), $filename8);
            // $file8 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id.  '/' .'vehicle/'),  $filename9 );
            // $file9 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id.  '/' .'driver license/'),  $filename10 );
            // if($request->hasFile('auth_letter'))
            // {
            // $file10->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname), $filename11);
            // }
            //   if(Session::get('vehicle') == 'Second-hand')
            // {
            // $file12 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '_'.$name->firstname. '_' .$name->lastname),  $filename13 );
            // }

            $document->vehicle_front = $filename1;
            $document->driver_license =  $filename2;
            $document->rider_photo =  $filename3;
            $document->cert_registration =  $filename4;
            $document->official_receipt = $filename5;
             if($request->hasFile('drug_test')){
            $document->drug_test =  $filename6;
             }
            $document->nbi_clearance = $filename7;
            $document->vehicle_side =  $filename8;
            $document->vehicle_back =  $filename9;
            $document->license_back =  $filename10;
              if($request->hasFile('auth_letter'))
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
                
                  $status =   tbl_rider_application::where('rider_id', $request->rider_id)
                  ->value('status');
 
                  $request->session()->put('status', $status);
                  
                  return redirect('/rider_application5');
        }
        else{
            return back()->with('fail', 'Something is wrong');
        }
      
    }
    
    public function RiderRequirements(){
        return view('/rider_bike_requirements');
    }
    public function RiderRequirementsSubmit(Request $request){

         $request->validate([
            'image'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'vehicle_side'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'license_back'=> 'required|mimes:jpeg,png,jpg|max:5000',
            'nbi'=> 'required|mimes:pdf|max:5000'
        ]);
        
        $document = new tbl_rider_document();
        $document->rider_id = $request->rider_id;
      
        
        if($request->hasFile('license') && $request->hasFile('image') && $request->hasFile('nbi') && $request->hasFile('vehicle_side') && $request->hasFile('license_back')){

            $file = $request->file('license')->store('rider_documents/'.$request->rider_id.'/driver_license', 's3', ['visibility', 'public']);
            $file2 = $request->file('image')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
            if($request->hasFile('drug_test')){
            $file5 = $request->file('drug_test')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
            }
            $file6 = $request->file('nbi')->store('rider_documents/'.$request->rider_id.'', 's3', ['visibility', 'public']);
            $file7 = $request->file('vehicle_side')->store('rider_documents/'.$request->rider_id.'/vehicle', 's3', ['visibility', 'public']);
            $file9 = $request->file('license_back')->store('rider_documents/'.$request->rider_id.'/driver_license', 's3', ['visibility', 'public']);

            
            // $license = $file->getClientOriginalName();
            // $image = $file2->getClientOriginalName();
            // if($request->hasFile('drug_test')){
            // $drug = $file5->getClientOriginalName();
            // }
            // $nbi = $file6->getClientOriginalName();
            // $side = $file7->getClientOriginalName();
            // $license_back = $file9->getClientOriginalName();

            
            $filename2 = Storage::disk('s3')->url($file);
            $filename3 = Storage::disk('s3')->url($file2);
            if($request->hasFile('drug_test')){
            $filename6 = Storage::disk('s3')->url($file5);
            }
            $filename7 = Storage::disk('s3')->url($file6);
            $filename8 = Storage::disk('s3')->url($file7);
            $filename10 = Storage::disk('s3')->url($file9);


            $name = tbl_rider_accounts::where('rider_id', $request->rider_id)->first();
             
            // $file ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id. '/' .'driver license/'),  $filename2 );
            // $file2->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id), $filename3);
            // if($request->hasFile('drug_test')){
            // $file5 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id),  $filename6 );
            // }
            // $file6 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id),  $filename7 );
            // $file7->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id.  '/' .'vehicle/'), $filename8);
            // $file9 ->move(('uploads/'. 'rider_documents'. '/'.$request->rider_id.  '/' .'driver license/'),  $filename10 );


            $document->driver_license =  $filename2;
            $document->rider_photo =  $filename3;
            if($request->hasFile('drug_test')){
            $document->drug_test =  $filename6;
            }
            $document->nbi_clearance = $filename7;
            $document->vehicle_side =  $filename8;
            $document->license_back =  $filename10;

           
        }
        $success = $document->save();
        if($success){
            
            $id = tbl_rider_document::where('rider_id', $request->rider_id)->first();

            tbl_rider_application::where('rider_id', $request->rider_id)
                ->update([
                    'document_id' => $id->document_id,
                    'status' => "Pending"
                ]);
                
                  $status =   tbl_rider_application::where('rider_id', $request->rider_id)
                  ->value('status');
 
                  $request->session()->put('status', $status);
                  
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
        
        return view('Rider_ApplicationStatus', compact('Data'));
    }
    public function agreement(){
        return view('/rider_application_agreement');
    }
   
    public function RiderLoginIndex(Request $request){
        
    /*RIDER CHECK COOKIE */
        if(Cookie::has('rider_email') && Cookie::has('rider_password')){
             $user = tbl_rider_accounts::where('email', '=', Cookie::get('rider_email'))->first();
              $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
                ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
                ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
                ->where('tbl_rider_account.rider_id', $user->rider_id)
                ->limit(1)
                ->get();

                 $request->session()->put('registerID', $user->rider_id);
                return view('/Rider_ApplicationStatus', compact('Data'));
            }
            
    /*MERCHANT CHECK COOKIE */
      if(Cookie::get('partner_email') && Cookie::get('partner_password'))
        {   
             $merchant = tbl_partner_accounts::where('email', '=', Cookie::get('partner_email'))->first();
              $status = tbl_merchant_application::where('merchant_id', $merchant->merchant_id)
                ->first();

                if($status->status == 'pending' || $status->status == 'Reviewing' || $status->status == 'Rejected'){
                    
                     $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
                    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
                    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
                    ->where('merchant_application.merchant_id',  $merchant->merchant_id)
                    ->limit(1)
                    ->get();
                    
                    $request->session()->put('partnerID', $merchant->merchant_id);
                    return view('/partner_applicationstatus', compact('Data'));
                }
                else{
                    $log = new tbl_activitylog();
                    $log->merchant_id = $merchant->merchant_id;
                    $log->email = $merchant->email;
                    $log->name = $merchant->firstname. ' ' .$merchant->lastname;
                    $log->description = 'Has Log In';
                    $res = $log->save();
                    if($res){
                    $request->session()->put('loginID', $merchant->merchant_id);
                   return redirect('/index');
                    }
                }
        }
            else{
        return view('/rider_login');
            }
    }
    
    /* RIDER LOGIN */
    public function RiderLogIn(Request $request){
          
         $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ]);
      
         $user = tbl_rider_accounts::where('email', '=', $request->email)->first();
         $merchant = tbl_merchant_account::where('email', '=', $request->email)->first();
         $role = tbl_admin_role::where('email', '=', $request->email)->first();

         if($user){
            
            if(Hash::check($request->password, $user->password)){

                /*IF CHECKBOX = TRUE */
                if($request->remember){

                /*SET COOKIE */
                $response = new Response();
                Cookie::queue(Cookie::forever('rider_email', $request->email));
                Cookie::queue(Cookie::forever('rider_password', $request->password));
                
                /*FORGET COOKIE */
                // Cookie::queue(Cookie::forget('email'));
                // Cookie::queue(Cookie::forget('password'));  
                }   
                $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
                ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
                ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
                ->where('tbl_rider_account.rider_id', $user->rider_id)
                ->limit(1)
                ->get();
                
                $request->session()->put('registerID', $user->rider_id);
                return view('/Rider_ApplicationStatus', compact('Data'));
            }
            else{
                  return back()->with('fail', 'Password does not match');
            }
        }
        
         /* MERCHANT LOGIN */
        if($merchant){
            if(Hash::check($request->password, $merchant->password)){
                
                /*IF CHECKBOX = TRUE */
                 if($request->remember){
                    
                    /*SET COOKIE*/
                    $minutes = 5;
                    $response = new Response;
                    Cookie::queue(Cookie::forever('partner_email', $request->email, $minutes));
                    Cookie::queue(Cookie::forever('partner_password', $request->password, $minutes));
                }
                $status = tbl_merchant_application::where('merchant_id', $merchant->merchant_id)
                ->first();
                if($status->status == 'pending' || $status->status == 'Reviewing' || $status->status == 'Rejected'){
                    
                     $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
                    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
                    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
                    ->where('merchant_application.merchant_id',  $merchant->merchant_id)
                    ->limit(1)
                    ->get();
                    
                    $request->session()->put('partnerID', $merchant->merchant_id);
                    return view('/partner_applicationstatus', compact('Data'));
                }
                else{
                $log = new tbl_activitylog();
                $log->merchant_id = $merchant->merchant_id;
                $log->email = $merchant->email;
                $log->name = 'Admin';
                $log->description = 'Has Log In';
                $res = $log->save();
                if($res){
                $request->session()->put('Admin', $merchant->role);
                $request->session()->put('loginID', $merchant->merchant_id);
                return redirect('/index');
                }
            
                }
            }
            else{
                  return back()->with('fail', 'Password does not match');
            }
        }
        if($role){
             if(Hash::check($request->password, $role->password)){
                
                /*IF CHECKBOX = TRUE */
                 if($request->remember){
                    
                    /*SET COOKIE*/
                    $minutes = 5;
                    $response = new Response;
                    Cookie::queue(Cookie::forever('partner_email', $request->email, $minutes));
                    Cookie::queue(Cookie::forever('partner_password', $request->password, $minutes));
                }
              

                $log = new tbl_activitylog();
                $log->merchant_id = $role->merchant_id;
                $log->email = $role->email;
                $log->name = $role->role;
                $log->description = 'Has Log In';
                $res = $log->save();
                if($res){
                $request->session()->put('loginID', $role->merchant_id);
                $request->session()->put('AdminRole', $role->role);
                if($role->role == 'Inventory Officer')
                {
                    return redirect('/product');
                }
                elseif($role->role == 'Sales Officer')
                {
                    return redirect('/admin_orders');
                }
                }
            

            }
            else{
                  return back()->with('fail', 'Password does not match');
            }
        }
        else{
            return back()->with('fail', 'This is email is not registered');
        }
        
        
    }
    public function RiderLogout(){
        if(Session::has('registerID')){
            Session::pull('registerID');
            Cookie::queue(Cookie::forget('rider_email'));
            Cookie::queue(Cookie::forget('rider_password'));  
            return redirect('/rider_login');
        }

    }
    }