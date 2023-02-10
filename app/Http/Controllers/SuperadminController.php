<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_account;
use App\Models\tbl_accepted_rider;
use App\Models\tbl_partner_accounts;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_application;
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
            $request->session()->put('adminID', $admin->admin_id);
            return redirect('/superadmin_index');
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
        Session::pull('adminID');
        return redirect('/superadmin_login');
    }
   }
   public function ApplicationsRider(){
    $application = tbl_vehicle_infos::all();
    return view('superadmin.superadmin_applicationrider', compact('application'));

   }
    public function PartnerDetails($id){

    $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->where('tbl_merchant_account.merchant_id', $id)
    ->limit(1)
    ->get();

    return view('superadmin.superadmin_partnerdetails', compact('Data'));
   }
   
   public function partner(){
    $Data = tbl_partner_accounts::join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->join('merchant_application', 'tbl_merchant_account.merchant_id', '=', 'merchant_application.merchant_id')
    ->distinct()
    ->get(['merchant_application_id', 'status', 'merchant_application.date', 'merchant_application.merchant_id', 'business_type', 'business_name']);
   
    return view('superadmin.superadmin_partner', compact('Data'));
    // dd($Data);
   }

    public function profile(){
    return view('superadmin.superadmin_profile');
   }
   public function Rider(){
          $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->distinct()
        ->get(['vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id']);

    return view('superadmin.superadmin_rider',compact('Data'));
   }

   public function ActivityLog(){
    return view('superadmin.superadmin_activitylog');
   }
   
    public function RiderDetails($id){
    $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->where('tbl_rider_account.rider_id', $id)
        ->limit(1)
        ->get();
        
     return view('superadmin.superadmin_riderdetails', compact('Data'));

   }
   
   public function AcceptedRider(){
    
     $Data = tbl_rider_accounts::join('tbl_accepted_rider', 'tbl_rider_account.rider_id', '=', 'tbl_accepted_rider.rider_id')
    ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
    ->join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
    ->get(['tbl_accepted_rider.accepted_rider_id' ,'tbl_rider_account.rider_id', 'firstname', 'lastname', 'tbl_accepted_rider.date', 'vehicle_type', 'tbl_rider_account.email', 'tbl_accepted_rider.credit_score']);
   
    return view('superadmin.superadminapplication_accepted_rider', compact('Data'));
   }
   
    public function AcceptedPartner(){
    return view('superadmin.superadminapplication_accepted_partner');
   }
   
   public function RiderAccept(Request $request){

    $rider_application = new tbl_accepted_rider();
    $rider_application->rider_id = $request->rider_id;
    $rider_application->credit_score = 100;
    $res = $rider_application-> save();
    
    if($res)
    {
    $result = tbl_rider_application::where('rider_application_id', $request->application_id)
    ->delete();

    return redirect('/superadmin_rider');
    }
    else{
          return back()->with('fail', 'Something is wrong');
    }
   }

   
}