<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_account;
use App\Models\tbl_accepted_merchant;
use App\Models\tbl_accepted_rider;
use App\Models\tbl_merchant_application;
use App\Models\tbl_partner_accounts;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_application;
use App\Models\tbl_superadmin_log;
use App\Models\tbl_vehicle_infos;
use Illuminate\Support\Facades\Session;

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
        if($request->password == $admin->password){
         $log = new tbl_superadmin_log();
         $log->description = 'Has Log In';
         $res = $log -> save();
         if($res){
             $request->session()->put('adminID', $admin->admin_id);
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
        $res = $log -> save();
        if($res){
        Session::pull('adminID');
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
    ->get(['tbl_accepted_rider.accepted_rider_id' ,'tbl_rider_account.rider_id', 'firstname', 'lastname', 'tbl_document_info.rider_photo']);
   
    return view('superadmin.superadminapplication_accepted_rider', compact('Data'));
   }
   
    public function AcceptedPartner(){
    
    $Data = tbl_partner_accounts::join('tbl_accepted_merchant', 'tbl_merchant_account.merchant_id', '=', 'tbl_accepted_merchant.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->get(['business_name', 'merchant_document.logo', 'tbl_merchant_account.merchant_id']);    

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
   public function RiderProfile($id){
    
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
        
       tbl_rider_application::where('rider_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       return back();
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

        return back();
       }
       
    }
    if($request->status == 'Rejected'){
        tbl_rider_application::where('rider_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       return back();
    }
   }
   
   public function ApplicationProfile($id){

     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->where('tbl_rider_account.rider_id', $id)
        ->limit(1)
        ->get();

    return view('superadmin.superadmin_applicationprofile', compact('Data'));
   }
   
   public function UpdateMerchant(Request $request){
    if($request->status == 'Reviewing'){
        
       tbl_merchant_application::where('merchant_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       return back();
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

        return back();
       }
       
    }
    if($request->status == 'Rejected'){
        tbl_merchant_application::where('merchant_application_id', $request->id)
       ->update([
            'status' => $request->status
       ]);
       return back();
    }
   }
}