<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_account;
use App\Models\tbl_rider_accounts;
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
    public function PartnerDetails(){
    return view('superadmin.superadmin_partnerdetails');
   }
   
   public function partner(){
    return view('superadmin.superadmin_partner');
   }

    public function profile(){
    return view('superadmin.superadmin_profile');
   }
   public function Rider(){
    return view('superadmin.superadmin_rider');
   }
   public function ActivityLog(){
    return view('superadmin.superadmin_activitylog');
   }
    public function RiderDetails(){
    return view('superadmin.superadmin_riderdetails');
   }
   public function AcceptedRider(){
    return view('superadmin.superadminapplication_accepted_rider');
   }
    public function AcceptedPartner(){
    return view('superadmin.superadminapplication_accepted_partner');
   }
}