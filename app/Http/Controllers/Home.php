<?php

namespace App\Http\Controllers;

use App\Models\tbl_merchant_application;
use App\Models\tbl_merchant_document;
use App\Models\tbl_merchant_info;
use App\Models\tbl_partner_accounts;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_application;
use App\Models\tbl_rider_document;
use App\Models\tbl_vehicle_infos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Home extends Controller
{
    //
    public function index(){
        Session::pull('status');
        Session::pull('rider_id');
        Session::pull('merchant_id');
        Session::pull('partnerstatus');
        return view('index');
    }
     public function ExitSignup(){
        
        if(Session::has('rider_id')){
          $account = tbl_rider_accounts::where('rider_id', Session::get('rider_id'))
            ->delete();

         $document =  tbl_rider_document::where('rider_id', Session::get('rider_id'))
            ->delete();

          $vehicle =  tbl_vehicle_infos::where('rider_id', Session::get('rider_id'))
            ->delete();
        
         $application =  tbl_rider_application::where('rider_id', Session::get('rider_id'))
            ->delete();
            
            if($account || $document || $vehicle || $application){
            Session::pull('rider_id');
            Session::pull('verification');
            Session::pull('status');
            return redirect('/');
            }
            else{
                return back()->with('fail', 'something went wrong');
            }
            
        }
        else{
            $account = tbl_partner_accounts::where('merchant_id', Session::get('merchant_id'))
            ->delete();

         $document =  tbl_merchant_document::where('merchant_id', Session::get('merchant_id'))
            ->delete();

          $vehicle =  tbl_merchant_info::where('merchant_id', Session::get('merchant_id'))
            ->delete();
        
         $application =  tbl_merchant_application::where('merchant_id', Session::get('merchant_id'))
            ->delete();

            if($account || $document || $vehicle || $application){
            Session::pull('merchant_id');
            Session::pull('verification');
            Session::pull('partnerstatus');
            return redirect('/');
            }
            else{
                return back()->with('fail', 'something went wrong');
            }
        }
       
    }
    public function AccountType(){
        return view ('account_type');
    }

    public function LoginType(){
        return view ('login_type');
    }
    public function TermsCondition(){
        return view ('terms_condition');
    }
    public function Privacy(){
        return view ('privacy');
    }
    public function Service(){
        return view ('service');
    }
     public function MissionIndex(){
        return view ('mission');
    }
     public function VisionIndex(){
        return view ('vision');
    }
}