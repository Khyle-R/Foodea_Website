<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Mail\PasswordVerification;
use Illuminate\Http\Request;
use App\Models\tbl_merchant_info;
use App\Models\tbl_vehicle_infos;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_document;
use App\Models\tbl_partner_accounts;
use Illuminate\Support\Facades\Mail;
use App\Models\tbl_merchant_document;
use App\Models\tbl_rider_application;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_merchant_application;
use Illuminate\Support\Facades\Storage;
use App\Clients\SendGridClient;
use App\Models\tbl_category;
use App\Models\tbl_product;

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
            
         $product = tbl_product::where('merchant_id', Session::get('merchant_id'))
        ->delete();
       
        $category = tbl_category::where('merchant_id', Session::get('merchant_id'))
        ->delete();
        
         $application =  tbl_merchant_application::where('merchant_id', Session::get('merchant_id'))
         ->delete();

            if($account || $document || $vehicle || $application || $product || $category){
            Session::pull('loops');
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

    public function ContactIndex(){ 
         return view('contact');
    }

    public function DownloadAppIndex(){ 
         return view('download_app');
    }
    public function DownloadAppUserIndex(){
        return view('download_app_user');
    }
    public function ContactUssend(Request $request){
        // $mailData = [
        //     'title' => 'Password Reset',
        //     'body' => 'test',
        //     'name' => $request->name,
        //     'text' => $request->text,
        //     ];
        //     Mail::to($request->email)->send(new ContactUs($mailData));
            
            $text = $request->text;
            $sender_name = $request->name;
            $sender_email = $request->email;
            $html = view('email.contact')->with('text', $text)->with('sender_name', $sender_name)->with('sender_email', $sender_email)->render();
            SendGridClient::sendEmail('foodeafoodea@gmail.com', "Contact us Inquiry", $html);
            
            return back();
        
    }

    public function test(){
        return view('test.form');
    }

    public function teststore(Request $request){
        $id = 123;
        $path = $request->file('image')->store('images/test/'. $id.'', 's3', ['visibility', 'public']);
        // Storage::disk('s3')->setVisibility($path, 'public');

        $saved_link = Storage::disk('s3')->url($path);

        // return Storage::disk('s3')->response($path);
        return $saved_link;
    }

    public function testshow(){

    }
}