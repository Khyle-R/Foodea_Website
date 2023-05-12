<?php

namespace App\Http\Controllers;

use App\Mail\MessageEmail;
use ZipArchive;
use App\Models\tbl_product;
use Illuminate\Http\Request;
use App\Models\admin_account;
use App\Models\tbl_merchant_info;
use App\Models\tbl_vehicle_infos;
use App\Mail\PasswordVerification;
use App\Mail\RiderAccepted;
use App\Models\tbl_accepted_rider;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_document;
use App\Models\tbl_superadmin_log;
use App\Models\tbl_partner_accounts;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\tbl_accepted_merchant;
use App\Models\tbl_rider_application;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_merchant_application;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rules\Password;
use App\Clients\SendGridClient;
use App\Models\tbl_activitylog;
use App\Models\tbl_app_user;
use App\Models\tbl_category;
use App\Models\tbl_inventory;
use App\Models\tbl_merchant_account;
use App\Models\tbl_merchant_document;
use App\Models\tbl_orders;
use App\Models\tbl_transaction;
use App\Models\tbl_voucher;

class SuperadminController extends Controller
{
    public function index(){
        $riders = tbl_accepted_rider::count();
        $merchant = tbl_accepted_merchant::count();
        $sales = tbl_orders::where('status', 'Delivered')->sum('total');
        $users = tbl_app_user::count();
        
        $revenue = 0.1 * $sales;

        
         $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->where('rider_application.status', 'Pending')
        ->distinct()
        ->orderBy('tbl_rider_account.rider_id', 'desc')
        ->get(['rider_photo' ,'firstname', 'lastname' ,'vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id', 'email']);

        if($Data){
        
         $date = tbl_merchant_application::get();
         
        $day=[];
         foreach($date as $dates){
            $timestamp = strtotime($dates->date);
            $day[] = date('D', $timestamp);
         }
         
          // GET DATE AND TOTAL IN CHART
            $date = tbl_orders::selectRaw('date, sum(total) as totals')
            ->groupBy('date')
            ->get();

            $day = [];
            $total = [];
    
       
         foreach($date as $dates){
            $timestamp = strtotime($dates->date);
            $day[] = date('M', $timestamp).' '. date('d', $timestamp).' ' .date('Y', $timestamp);
            $total[] = 0.1 * $dates->totals; 
        
        }
      
        // !GET DATE AND TOTAL IN CHART 
        
         $TopMerchant = tbl_merchant_info::join('tbl_orders', 'tbl_merchant_info.merchant_id', '=', 'tbl_orders.restaurant_id')
        ->selectRaw('tbl_merchant_info.merchant_id, tbl_merchant_info.business_name, tbl_merchant_info.store_email, tbl_merchant_info.business_type, count(tbl_orders.restaurant_id) as totals')
        ->groupBy('tbl_merchant_info.merchant_id', 'tbl_merchant_info.business_name', 'tbl_merchant_info.store_email', 'business_type')
        ->orderBy('totals', 'desc')
        ->get();
    
        $TopSellingMerchant=[];
        foreach($TopMerchant as $top){
            $TopSellingMerchant[] = $top;
            
        }
        

         $TopSellingProducts = tbl_product::join('tbl_orders', 'tbl_product.product_id', '=', 'tbl_orders.product_id')
        ->selectRaw('tbl_product.product_id, tbl_product.product_name, tbl_product.category_name, sum(tbl_orders.total) as totals, count(tbl_orders.product_id) as product_sold')
        ->groupBy('tbl_product.product_id', 'tbl_product.product_name', 'tbl_product.category_name')
        ->where('tbl_orders.status', 'Delivered')
        ->orderBy('product_sold', 'desc')
        ->get();
    
        $product=[];
        foreach($TopSellingProducts as $prod){
            $products[] = $prod;
            
        }

        $barchart = tbl_orders::selectRaw('YEAR(date) as year, sum(total) as totals')
        ->groupBy('year')
        ->get();

          $year=[];
          $barsales = [];
          
        foreach($barchart as $bar){
            $year[] = $bar->year;
            $barsales[] = 0.1 * $bar->totals;
            
        }

         return view('superadmin.superadmin_dashboard', compact('riders', 'merchant', 'Data', 'day', 'revenue', 'users', 'day', 'total', 'TopSellingMerchant', 'products', 'year', 'barsales'));
        }

       
    }
 
    public function SuperadminForgotPass(){
        return view('superadmin.superadmin_forgotpass');
    }
    public function SuperadminForgetSend(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

         $email = admin_account::where('email', $request->email)
          ->first();
          
          if($email){
         $code = mt_rand(1000, 9999);

                    //    $mailData = [
                    //     'title' => 'Password Reset',
                    //     'body' => 'test',
                    //     'code' => $code,
                    //     'fname' => $email->firstname,
                    //     'lname' => $email->lastname,
                    //    ];
                    //    Mail::to($email)->send(new PasswordVerification($mailData));

                    $html = view('email.forgotpass')->with('code', $code)->render();
                    SendGridClient::sendEmail($request->email, "Password Reset", $html);

                    $request->session()->put('admin_verification', $code);
                    $request->session()->put('admin_email', $request->email);
                     return redirect('/superadmin_forgotpass1');
         } 
         else{
            return back()->with('fail', 'Email does not exist');
         }
        
    }
     public function SuperadminForgotPass2(){
        $email = admin_account::where('email', Session::get('admin_email'))
        ->first();
        
        return view('superadmin.superadmin_forgotpass1', compact('email'));
     }

     public function SuperadminForgotVerify(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $num3 = $request->num3;
        $num4 = $request->num4;
        if($num1. $num2 . $num3 . $num4 == Session::get('admin_verification')){
            return redirect('/superadmin_forgotpass2');
        }
        else{
            return back()->with('fail', 'Verification does not match');
        }
     }
     
     public function SuperadminForgotResend(Request $request){
         $email = admin_account::where('email', Session::get('admin_email'))
          ->first();
          
          if($email){
         $code = mt_rand(1000, 9999);

                    //    $mailData = [
                    //     'title' => 'Password Reset',
                    //     'body' => 'test',
                    //     'code' => $code,
                    //     'fname' => $email->firstname,
                    //     'lname' => $email->lastname,
                    //    ];
                    //    Mail::to($email)->send(new PasswordVerification($mailData));

                       $receiverEmail = Session::get('admin_email');
                       $html = view('email.forgotpass')->with('code', $code)->render();
                        SendGridClient::sendEmail($receiverEmail, "Password Reset", $html);

                    $request->session()->put('admin_verification', $code);
                     return back();
     }
    }
     public function SuperadminForgotPass3(){
        return view('superadmin.superadmin_forgotpass2');
     }

     public function SuperadminForgotReset(Request $request){
        $request->validate([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        if($request->password == $request->password_confirmation){
            $hash = Hash::make($request->password_confirmation);
            $res = admin_account::where('email', Session::get('admin_email'))
            ->update([
                'password' => $hash
            ]);
            if($res){
                Session::pull('admin_email');
                Session::pull('admin_verification');
                return redirect('/superadmin_forgotpass3');
            }
        }
        
       
     }
     public function SuperadminForgotPass4(){
        return view('superadmin.superadmin_forgotpass3');
     }
    
     public function changepass(){
        return view('superadmin.superadmin_changepassword');
    }
    public function login(Request $request){
 
        if(Cookie::get('superadmin_email') && Cookie::get('superadmin_password'))
        {
             $admin = admin_account::where('email', '=', Cookie::get('email'))->first();
             $request->session()->put('adminID', $admin->admin_id);
             $request->session()->put('adminEmail', $admin->email);
            return redirect('/superadmin_index');
            
        }
        else{
    return view('superadmin.superadmin_login');
        }
      
    }
    
    public function LoginAdmin(Request $request){
        
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);
       
    $admin = admin_account::where('email', '=', $request->email)->first();
    if($admin){
        if(Hash::check($request->password, $admin->password)){
            if($request->remember){
            $minutes = 5;
            $response = new Response();
            Cookie::queue(Cookie::forever('superadmin_email', $request->email, $minutes));
            Cookie::queue(Cookie::forever('superadmin_password', $request->password, $minutes));
            
        } 
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
        Cookie::queue(Cookie::forget('superadmin_email'));
        Cookie::queue(Cookie::forget('superadmin_password'));  
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
    
    $product = tbl_product::where('merchant_id', $id)
    ->get();
    return view('superadmin.superadmin_partnerdetails', compact('Data', 'product'));
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
        ->orderBy('tbl_rider_account.rider_id', 'desc')
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
    ->get(['tbl_accepted_rider.accepted_rider_id' ,'tbl_rider_account.rider_id', 'firstname', 'lastname', 'tbl_document_info.rider_photo', 'suffix', 'email', 'mobile_number', 'address', 'city', 'barangay', 'middlename']);
   
    if($Data)
    {
    $accepted = tbl_accepted_rider::count();
    return view('superadmin.superadminapplication_accepted_rider', compact('Data', 'accepted'));
    }
}
   
    public function AcceptedPartner(){
    
    $Data = tbl_partner_accounts::join('tbl_accepted_merchant', 'tbl_merchant_account.merchant_id', '=', 'tbl_accepted_merchant.merchant_id')
    ->join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
    ->join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
    ->distinct()
    ->get(['tbl_accepted_merchant.accepted_merchant_id', 'business_name', 'merchant_document.logo', 'tbl_merchant_account.merchant_id', 'business_type', 'tbl_merchant_info.barangay', 'tbl_merchant_info.city', 'tbl_merchant_info.address', 'store_email', 'store_number']);    

    if($Data)
    {
    $accepted = tbl_accepted_merchant::count();
    return view('superadmin.superadminapplication_accepted_partner', compact('Data', 'accepted'));
    }
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
        ->orderBy('tbl_rider_account.rider_id', 'desc')
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
        ->orderBy('tbl_rider_account.rider_id', 'desc')
         ->distinct()
        ->get(['rider_photo' ,'firstname', 'lastname' ,'vehicle_type', 'status', 'rider_application.date', 'rider_application.rider_application_id', 'tbl_rider_account.rider_id', 'email']);

    return view('superadmin.superadmin_accept', compact('Data'));
   }
   public function Archive(){
    
     $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('rider_application', 'tbl_rider_account.rider_id', '=', 'rider_application.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->where('rider_application.status', 'Rejected')
        ->orderBy('tbl_rider_account.rider_id', 'desc')
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
   public function MerchantDeleteApplicationProfile(Request $request, $id){
    $res = tbl_merchant_application::where('merchant_id', $id)
    ->update([
        'status' => 'Rejected'
    ]);
    if($res)
    {
        tbl_accepted_merchant::where('merchant_id', $id)
        ->delete();
        
        $request->session()->put('success', 'Status Updated');
        return back();
    }
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

    $RiderOrder = tbl_rider_accounts::join('tbl_transaction', 'tbl_rider_account.rider_id', '=', 'tbl_transaction.rider_id')
    ->join('tbl_product', 'tbl_transaction.product_id', '=', 'tbl_product.product_id')
    ->where('tbl_rider_account.rider_id', $id)
    ->where('tbl_transaction.order_status', 'Delivered')
    ->get();


    return view('superadmin.superadmin_riderprofile', compact('Data', 'RiderOrder'));
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
          $email = tbl_rider_accounts::where('rider_id',  $request->rider_id)
          ->first();
          
            //  $mailData = [
            //     'title' => 'Password Reset',
            //     'body' => 'test',
            //     'fname' => $email->firstname,
            //     'lname' => $email->lastname,
            //     ];
            //     Mail::to($email->email)->send(new RiderAccepted($mailData));
                
             $html = view('email.accepted')->render();
             SendGridClient::sendEmail($email->email, "Application Successful", $html);
                
                
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
   
   public function RiderDeleteApplicationProfile(Request $request, $id){
    $res = tbl_rider_application::where('rider_id', $id)
    ->update([
        'status' => 'Rejected'
    ]);
    if($res)
    {
        tbl_accepted_rider::where('rider_id', $id)
        ->delete();
        
        $request->session()->put('success', 'Status Updated');
        return back();
    }
   }

   public function RemoveMerchantAccount(Request $request){
    $res = tbl_merchant_application::where('merchant_application_id', $request->id)
    ->delete();

    if($res){
        tbl_merchant_account::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_merchant_info::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_merchant_document::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_product::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_transaction::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_voucher::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_orders::where('restaurant_id', $request->partner_id)
        ->delete();
        tbl_inventory::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_category::where('merchant_id', $request->partner_id)
        ->delete();
        tbl_activitylog::where('merchant_id', $request->partner_id)
        ->delete();
        $request->session()->put('success', 'Account Removed');
        return back();
    }
   }

   
   public function RemoveRiderAccount(Request $request){
    $res = tbl_rider_application::where('rider_application_id', $request->id)
    ->delete();

    if($res){
       tbl_vehicle_infos::where('rider_id', $request->rider_id)
        ->delete();
        tbl_rider_accounts::where('rider_id', $request->rider_id)
        ->delete();
        tbl_rider_document::where('rider_id', $request->rider_id)
        ->delete();

        $request->session()->put('success', 'Account Removed');
        return back();
    }
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
            $email = tbl_partner_accounts::where('merchant_id',  $request->merchant_id)
          ->first();
          
            //  $mailData = [
            //     'title' => 'Password Reset',
            //     'body' => 'test',
            //     'fname' => $email->firstname,
            //     'lname' => $email->lastname,
            //     ];
            //     Mail::to($email->email)->send(new RiderAccepted($mailData));

                $html = view('email.accepted')->render();
                SendGridClient::sendEmail($email->email, "Application Successful", $html);
                
                
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
        
         $res = tbl_rider_application::where('rider_id', $request->rider_id)
        ->Update([
            'status' => 'Rejected'            
        ]);
        
        if($res){
            tbl_accepted_rider::where('accepted_rider_id', $request->accepted_rider_id)
            ->delete();
            
            $request->session()->put('success', 'Status Updated');
            return back();
        }
      }
      
       public function RemoveAcceptedMerchant(Request $request){
        
        $res = tbl_merchant_application::where('merchant_id', $request->merchant_id)
        ->Update([
            'status' => 'Rejected'            
        ]);
        
        if($res){
            
             tbl_accepted_merchant::where('accepted_merchant_id', $request->accepted_merchant_id)
            ->delete();

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

      public function RiderMessage(Request $request){
        $email = tbl_rider_accounts::where('rider_id', $request->rider_id)
        ->first();
        
        //  $mailData = [
        //     'title' => 'Password Reset',
        //      'body' => 'test',
        //      'fname' => $email->firstname,
        //      'lname' => $email->lastname,
        //      'subject' => $request->subject,
        //      'message' => $request->message,
        //      ];
        //      Mail::to($email->email)->send(new MessageEmail($mailData));

            $message = $request->message;
            $html = view('email.message')->with('message', $message)->render();
            SendGridClient::sendEmail($email->email, "Message from Foodea", $html);

             return back()->with('success', 'Message has been sent');

      }
      public function PartnerMessage(Request $request){
        $email = tbl_partner_accounts::where('merchant_id', $request->merchant_id)
        ->first();
        
        //  $mailData = [
        //     'title' => 'Password Reset',
        //      'body' => 'test',
        //      'fname' => $email->firstname,
        //      'lname' => $email->lastname,
        //      'subject' => $request->subject,
        //      'message' => $request->message,
        //      ];
        //      Mail::to($email->email)->send(new MessageEmail($mailData));

             $message = $request->message;
            $html = view('email.message')->with('message', $message)->render();
            SendGridClient::sendEmail($email->email, "Message from Foodea", $html);

             return back()->with('success', 'Message has been sent');

      }
      public function RiderEmergencyUpdate(Request $request){
        $res = tbl_vehicle_infos::where('rider_id', $request->rider_id)
        ->update([
            'emergency_name' => $request->name,
            'relationship' => $request->relationship,
            'contact_number' => $request->contact_number
        ]);
        if($res){
            $request->session()->put('success', 'Status Updated');
            return back();
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
        'old_password' => 'required|min:8|max:50',
        'new_password' => 'required|min:8|max:50',
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

        $sales = tbl_merchant_info::join('tbl_orders', 'tbl_merchant_info.merchant_id', '=', 'tbl_orders.restaurant_id')
        ->orderBy('restaurant_id', 'desc')
        ->get();
    
      
        return view('superadmin.superadmin_sales', compact('sales'));
    }
    
    /*VIEW PDF */
    /*DOWNLOAD */
     public function ViewPDF($id, $name){

          return Response::make(file_get_contents('uploads/'. 'rider_documents'. '/' .$id.  '/' .$name), 200, [
                         'content-type'=>'application/pdf',
                     ]);
     }
     public function ViewMerchantPDF($id, $name){

          return Response::make(file_get_contents('uploads/'. 'merchant_documents'. '/' .$id.  '/' .$name), 200, [
                         'content-type'=>'application/pdf',
                     ]);
     }
    public function Download( $id, $name){

              return response()->download(public_path('uploads/'. 'rider_documents'. '/'.$id. '/' .$name));        
    }

    public function DownloadMerchant($id, $name){

              return response()->download(public_path('uploads/'. 'merchant_documents'. '/'.$id.  '/' .$name));        
    }

    public function DownloadVehicleZip($id){

    
        $zip = new \ZipArchive();
        $fileName = mt_rand(1000, 9999).'.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('uploads/'. 'rider_documents'. '/'.$id. '/'.'vehicle/'));
       
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
     public function DownloadLicenseZip($id){

    
        $zip = new \ZipArchive();
        $fileName = mt_rand(1000, 9999).'.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('uploads/'. 'rider_documents'. '/'.$id. '/'.'driver license/'));
       
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