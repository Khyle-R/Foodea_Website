<?php

namespace App\Http\Controllers;

use ZipArchive;
use Illuminate\Http\Request;
use App\Models\admin_account;
use App\Models\tbl_merchant_info;
use App\Models\tbl_vehicle_infos;
use App\Models\tbl_accepted_rider;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_document;
use App\Models\tbl_superadmin_log;
use App\Models\tbl_partner_accounts;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\tbl_accepted_merchant;
use App\Models\tbl_rider_application;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_merchant_application;
use Illuminate\Support\Facades\Response;

class SuperadminController extends Controller
{
    public function index(){
        return view('superadmin.superadmin_dashboard');
    }
     public function changepass(){
        return view('superadmin.superadmin_changepassword');
    }
    public function login(){
        return view('superadmin.superadmin_login');
    }
    
    public function LoginAdmin(Request $request){
        
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);

    $admin = admin_account::where('email', '=', $request->email)->first();
    if($admin){
        if(Hash::check($request->password, $admin->password)){
         $log = new tbl_superadmin_log();
         $log->description = 'Has Log In';
         $log->email = $request->email;
         $res = $log -> save();
         if($res){
             $request->session()->put('adminID', $admin->admin_id);
             $request->session()->put('adminEmail', $admin->email);
            return redirect('/superadmin_index');
         }
        }else{
            return back()->with('fail', 'Password does not match');
        }
    }
    else{
        return back()->with('fail', 'This email does not exist');
    }
    }
   public function AdminLogOut(){
    if(Session::has('adminID')){
        $log = new tbl_superadmin_log();
        $log->description = 'Has Log Out';
        $log->email = Session::get('adminEmail');
        $res = $log -> save();
        if($res){
        Session::pull('adminID');
        Session::pull('adminEmail');
        return redirect('/superadmin_login');
        }
      
    }
   }
   public function ApplicationsRider(){
    $application = tbl_vehicle_infos::all();
    return view('superadmin.superadmin_applicationrider', compact('application'));

   }
    public function PartnerDetails($id){

    $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->join('tbl_accepted_merchant', 'tbl_merchant_account.merchant_id', '=', 'tbl_accepted_merchant.merchant_id')
    ->where('tbl_merchant_account.merchant_id', $id)
    ->limit(1)
    ->get();

    return view('superadmin.superadmin_partnerdetails', compact('Data'));
   }
   
   public function partner(){
    $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->distinct()
    ->get(['merchant_document.logo' ,'merchant_application_id', 'status', 'merchant_application.date', 'merchant_application.merchant_id', 'store_email', 'business_type', 'business_name']);
   
         $all = tbl_merchant_application::count();
        $pending = tbl_merchant_application::where('status', 'Pending')
        ->count();
        $review = tbl_merchant_application::where('status', 'Reviewing')
        ->count();
        $accept = tbl_merchant_application::where('status', 'Accepted')
        ->count();
        $reject = tbl_merchant_application::where('status', 'Rejected')
        ->count();
        
    return view('superadmin.superadmin_partner', compact('Data', 'all', 'pending', 'review', 'accept', 'reject'));
    // dd($Data);
   }

    public function profile(){   
    return view('superadmin.superadmin_profile');
   }
   public function Rider(){
          $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->distinct()
        ->get(['rider_photo' ,'firstname', 'lastname' ,'vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id', 'email']);
        
        $all = tbl_rider_application::count();
        $pending = tbl_rider_application::where('status', 'Pending')
        ->count();
        $review = tbl_rider_application::where('status', 'Reviewing')
        ->count();
        $accept = tbl_rider_application::where('status', 'Accepted')
        ->count();
        $reject = tbl_rider_application::where('status', 'Rejected')
        ->count();

    
    return view('superadmin.superadmin_rider',compact('Data', 'all', 'pending', 'review', 'accept', 'reject'));
   }

   public function ActivityLog(){

    $log = tbl_superadmin_log::all();

    return view('superadmin.superadmin_activitylog', compact('log'));
   }
   
    public function RiderDetails($id){
    // $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
    //     ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
    //     ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
    //     ->where('tbl_rider_account.rider_id', $id)
    //     ->limit(1)
    //     ->get();
        
    //  return view('superadmin.superadmin_riderdetails', compact('Data'));

   }
   
   public function AcceptedRider(){
    
     $Data = tbl_rider_accounts::join('tbl_accepted_rider', 'tbl_rider_account.rider_id', '=', 'tbl_accepted_rider.rider_id')
    ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
    ->join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
    ->distinct()
    ->limit(1)
    ->get(['tbl_accepted_rider.accepted_rider_id' ,'tbl_rider_account.rider_id', 'firstname', 'lastname', 'tbl_document_info.rider_photo', 'suffix', 'email', 'mobile_number', 'address', 'city', 'barangay', 'middlename']);
   
    return view('superadmin.superadminapplication_accepted_rider', compact('Data'));
   }
   
    public function AcceptedPartner(){
    
    $Data = tbl_partner_accounts::join('tbl_accepted_merchant', 'tbl_merchant_account.merchant_id', '=', 'tbl_accepted_merchant.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->distinct()
    ->limit(1)
    ->get(['tbl_accepted_merchant.accepted_merchant_id', 'business_name', 'merchant_document.logo', 'tbl_merchant_account.merchant_id', 'business_type', 'barangay', 'city', 'address', 'store_email', 'store_number']);    

    return view('superadmin.superadminapplication_accepted_partner', compact('Data'));
   }

   public function RiderAccept(Request $request){

    // // $rider_application = new tbl_accepted_rider();
    // // $rider_application->rider_id = $request->rider_id;
    // // $rider_application->credit_score = 100;
    // // $res = $rider_application-> save();
    
    // // if($res)
    // // {
    // // $result = tbl_rider_application::where('rider_application_id', $request->application_id)
    // // ->delete();

    // // return redirect('/superadmin_rider');
    // }
    // else{
    //       return back()->with('fail', 'Something is wrong');
    // }
   }
   public function Pending(){
    
     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->where('rider_application.status', 'Pending')
        ->distinct()
        ->get(['rider_photo' ,'firstname', 'lastname' ,'vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id', 'email']);

    return view('superadmin.superadmin_riderpending', compact('Data'));
   }
   public function Review(){
    
     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
         ->where('rider_application.status', 'Reviewing')
        ->distinct()
        ->get(['rider_photo' ,'firstname', 'lastname' ,'vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id', 'email']);

    return view('superadmin.superadmin_review', compact('Data'));
   }
   public function Accept(){
    
     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
         ->where('rider_application.status', 'Accepted')
        ->distinct()
        ->get(['rider_photo' ,'firstname', 'lastname' ,'vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id', 'email']);

    return view('superadmin.superadmin_accept', compact('Data'));
   }
   public function Archive(){
    
     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->where('rider_application.status', 'Rejected')
        ->distinct()
        ->get(['rider_photo' ,'firstname', 'lastname' ,'vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id', 'email']);

    return view('superadmin.superadmin_archive', compact('Data'));
   }
     public function MerchantPending(){
    
       $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->where('merchant_application.status', 'Pending')
    ->distinct()
    ->get(['merchant_document.logo' ,'merchant_application_id', 'status', 'merchant_application.date', 'merchant_application.merchant_id', 'store_email', 'business_type', 'business_name']);
   
    return view('superadmin.superadmin_merchantpending', compact('Data'));

   }
   public function MerchantApplicationProfile($id){
    $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->where('tbl_merchant_info.merchant_id', $id)
    ->limit(1)
    ->get();

    return view('superadmin.superadmin_merchantapplicationprofile', compact('Data'));
   
   }
   public function MerchantReview(){
    
       $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->where('merchant_application.status', 'Reviewing')
    ->distinct()
    ->get(['merchant_document.logo' ,'merchant_application_id', 'status', 'merchant_application.date', 'merchant_application.merchant_id', 'store_email', 'business_type', 'business_name']);
   
    return view('superadmin.superadmin_merchantreview', compact('Data'));

   }
   public function MerchantAccepted(){
    
       $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->where('merchant_application.status', 'Accepted')
    ->distinct()
    ->get(['merchant_document.logo' ,'merchant_application_id', 'status', 'merchant_application.date', 'merchant_application.merchant_id', 'store_email', 'business_type', 'business_name']);
   
    return view('superadmin.superadmin_merchantaccept', compact('Data'));

   }
    public function MerchantRejected(){
    
       $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->where('merchant_application.status', 'Rejected')
    ->distinct()
    ->get(['merchant_document.logo' ,'merchant_application_id', 'status', 'merchant_application.date', 'merchant_application.merchant_id', 'store_email', 'business_type', 'business_name']);
   
    return view('superadmin.superadmin_merchantarchive', compact('Data'));

   }
   public function RiderProfile(Request $request, $id){
    
     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->join('tbl_accepted_rider', 'tbl_rider_account.rider_id', '=', 'tbl_accepted_rider.rider_id')
        ->where('tbl_rider_account.rider_id', $id)
        ->limit(1)
        ->get();

    return view('superadmin.superadmin_riderprofile', compact('Data'));
   }
   
   public function Update(Request $request){
    if($request->status == 'Reviewing'){
        
      $res =  tbl_rider_application::where('rider_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       if($res)
        {
            $request->session()->put('success', 'Status Updated');
               return back();
        }
    }
    if($request->status == 'Accepted'){

       $res = tbl_rider_application::where('rider_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       if($res)
       {
        $rider_application = new tbl_accepted_rider();
        $rider_application->rider_id = $request->rider_id;
        $rider_application->credit_score = 100;
        $res = $rider_application-> save();

        if($res)
        {
            $request->session()->put('success', 'Status Updated');
               return back();
        }
     
       }
       
    }
    if($request->status == 'Rejected'){
       $res = tbl_rider_application::where('rider_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       
       if($res)
        {
            $accepted_id = tbl_rider_application::where('rider_application_id', $request->id)
            ->value('rider_id');
            
            $remove = tbl_accepted_rider::where('rider_id', $accepted_id)
            ->delete();

            if($remove){
            $request->session()->put('success', 'Status Updated');
               return back();
            }
        }
    }
   }
   
   public function ApplicationProfile($id){

     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->where('tbl_rider_account.rider_id', $id)
        ->limit(1)
        ->get();
    $document = tbl_rider_document::where('rider_id', $id);
    
    return view('superadmin.superadmin_applicationprofile', compact('Data', 'document'));
   }
   
   

   
   public function UpdateMerchant(Request $request){
    if($request->status == 'Reviewing'){
        
       $res = tbl_merchant_application::where('merchant_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       if($res)
        {
            $request->session()->put('success', 'Status Updated');
               return back();
        }
    }
    if($request->status == 'Accepted'){
       $res = tbl_merchant_application::where('merchant_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       if($res)
       {
        $merchant_application = new tbl_accepted_merchant();
        $merchant_application->merchant_id = $request->merchant_id;
        $merchant_application->ratings = 100;
        $res = $merchant_application-> save();

         if($res)
        {
            $request->session()->put('success', 'Status Updated');
               return back();
        }
       }
       
    }
    if($request->status == 'Rejected'){
        $res = tbl_merchant_application::where('merchant_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
        if($res)
        {
            $accepted_id = tbl_merchant_application::where('merchant_application_id', $request->id)
            ->value('merchant_id');

            $remove = tbl_accepted_merchant::where('merchant_id', $accepted_id)
            ->delete();
            if($remove)
            {
            $request->session()->put('success', 'Status Updated');
               return back();
            }
        }
    }
   }
      public function RemoveAcceptedRider(Request $request){
        
        $res = tbl_accepted_rider::where('accepted_rider_id', $request->accepted_rider_id)
        ->delete();
        
        if($res){
            $request->session()->put('success', 'Status Updated');
            return back();
        }
      }
      
       public function RemoveAcceptedMerchant(Request $request){
        
        $res = tbl_accepted_merchant::where('accepted_merchant_id', $request->accepted_merchant_id)
        ->delete();
        
        if($res){
            $request->session()->put('success', 'Status Updated');
            return back();
        }
      }
      
      public function AcceptedRiderUpdate(Request $request){
        
        $id = tbl_accepted_rider::where('accepted_rider_id', '=', $request->accepted_rider_id)
        ->value('rider_id');
    
        if($id)
        {
        $res = tbl_rider_accounts::where('rider_id', $id)
        ->update([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'suffix' => $request->suffix,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'city' => $request->city,
            'barangay' => $request->barangay
        ]);
   
        if($res){
             $request->session()->put('success', 'Status Updated');
            return back();
        }
        }
    
      }
      public function RiderProfileUpdate(Request $request){
        $id = tbl_accepted_rider::where('accepted_rider_id', '=', $request->accepted_rider_id)
        ->value('rider_id');

        if($id){
            
            $res = tbl_rider_accounts::where('rider_id', $id)
            ->update([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'age' => $request->age,
            'zip_code' => $request->zip_code,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'city' => $request->city,
            'barangay' => $request->barangay
        ]);
        if($res){
             $request->session()->put('success', 'Status Updated');
            return back();
        }
        }

      }
      public function AcceptedPartnerUpdate(Request $request){
        $id = tbl_accepted_merchant::where('accepted_merchant_id', $request->accepted_merchant_id)
        ->value('merchant_id');

       if($id)
       {
        $res = tbl_merchant_info::where('merchant_id', $id)
        ->update([
            'business_name' => $request->business_name,
            'business_type' => $request->business_type,
            'barangay' => $request->barangay,
            'city' => $request->city,
            'address' => $request->address,
            'store_email' => $request->store_email,
            'store_number' => $request->store_number
          
        ]);
        if($res){
             $request->session()->put('success', 'Status Updated');
            return back();
        }
       }
    }

    public function MerchantPersonalUpdate(Request $request){
           $id = tbl_accepted_merchant::where('accepted_merchant_id', $request->accepted_merchant_id)
        ->value('merchant_id');

       if($id)
       {
        $res = tbl_partner_accounts::where('merchant_id', $id)
        ->update([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname
          
          
        ]);
        if($res){
             $request->session()->put('success', 'Status Updated');
            return back();
        }
       }
    }

    public function MerchantBusinessUpdate(Request $request){
           $id = tbl_accepted_merchant::where('accepted_merchant_id', $request->accepted_merchant_id)
        ->value('merchant_id');

       if($id)
       {
        $res = tbl_merchant_info::where('merchant_id', $id)
        ->update([
            'business_name' => $request->business_name,
            'business_type' => $request->business_type,
            'barangay' => $request->barangay,
            'city' => $request->city,
            'address' => $request->address,
            'street' => $request->street,
            'postal_code' => $request->postal_code,
            'store_email' => $request->store_email,
            'store_number' => $request->store_number
          
          
        ]);
        if($res){
             $request->session()->put('success', 'Status Updated');
            return back();
        }
       }
    }
    /* ACCOUNT */

    public function AccountIndex(){
     
        return view('superadmin.superadmin_account');
    }

    public function ChangePassAdmin(Request $request){
       $request->validate([
        'old_password' => 'required|min:6|max:50',
        'new_password' => 'required|min:6|max:50',
        'confirm_password' => 'required| same:new_password',
       ]);

      $pass = admin_account::where('admin_id', 1)
      ->value('password');
      
      if(Hash::check($request->old_password, $pass)){
       
        $res = admin_account::where('admin_id', 1)
        ->update([
            'password' =>  bcrypt($request->confirm_password)
        ]);
        if($res){
            $request->session()->put('success', 'Password Updated');
            return back();
        }
      
      }
      else{
         $request->session()->put('fail', 'Old password does not match');
            return back();
      }

    }
    public function ChangeEmailAdmin(Request $request){
        
         $request->validate([
        'new_email' => 'required|email|unique:admin_account,email',
        'confirm_email' => 'required|email| same:new_email'
       ]);
       
       if($request->new_email == $request->confirm_email){
        $res = admin_account::where('admin_id', 1)
        ->update([
            'email' => $request->confirm_email
        ]);
        if($res){
            $request->session()->put('success', 'Email Updated');
            return back();
        }
       }
       else{
          $request->session()->put('fail', 'Email does not match');
            return back();
       }

    }
    public function SalesIndex(){
        return view('superadmin.superadmin_sales');
    }
    
    /*VIEW PDF */
    /*DOWNLOAD */
     public function ViewPDF($firstname, $lastname, $id, $name){

          return Response::make(file_get_contents('uploads/'. 'rider_documents'. '/' .$id. '_' .$firstname. '_'. $lastname. '/' .$name), 200, [
                         'content-type'=>'application/pdf',
                     ]);
     }
     public function ViewMerchantPDF($id, $name){

          return Response::make(file_get_contents('uploads/'. 'merchant_documents'. '/' .$id.  '/' .$name), 200, [
                         'content-type'=>'application/pdf',
                     ]);
     }
    public function Download($firstname, $lastname, $id, $name){

              return response()->download(public_path('uploads/'. 'rider_documents'. '/'.$id. '_' .$firstname. '_'. $lastname. '/' .$name));        
    }

    public function DownloadMerchant($id, $name){

              return response()->download(public_path('uploads/'. 'merchant_documents'. '/'.$id.  '/' .$name));        
    }

    public function DownloadVehicleZip($firstname, $lastname, $id){

    
        $zip = new \ZipArchive();
        $fileName = mt_rand(1000, 9999).'.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('uploads/'. 'rider_documents'. '/'.$id. '_' .$firstname. '_' .$lastname. '/'.'vehicle/'));
       
              foreach ($files as $key => $value){
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);

            }
            $zip->close();
        }   
        else{
             $zip->close();
        }

        return response()->download(public_path($fileName))->deleteFileAfterSend(true);
    }
     public function DownloadLicenseZip($firstname, $lastname, $id){

    
        $zip = new \ZipArchive();
        $fileName = mt_rand(1000, 9999).'.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('uploads/'. 'rider_documents'. '/'.$id. '_' .$firstname. '_' .$lastname. '/'.'driver license/'));
       
              foreach ($files as $key => $value){
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);

            }
            $zip->close();
        }   
        else{
             $zip->close();
        }

        return response()->download(public_path($fileName))->deleteFileAfterSend(true);
    }

       public function DownloadLicenseMerchantZip($id){

    
        $zip = new \ZipArchive();
        $fileName = mt_rand(1000, 9999).'.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('uploads/'. 'merchant_documents'. '/'.$id.  '/' . 'valid id/'));
       
              foreach ($files as $key => $value){
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);

            }
            $zip->close();
        }   
        else{
             $zip->close();
        }

        return response()->download(public_path($fileName))->deleteFileAfterSend(true);
    }
}