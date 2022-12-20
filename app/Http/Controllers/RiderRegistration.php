<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\tbl_vehicle_infos;
use App\Models\tbl_rider_accounts;
use App\Models\tbl_rider_document;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'zip' => 'required'
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
             //from database = input request
             $res = $rider -> save();
            
            if($res){
                $request->session()->put('rider_id', $rider->id);
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
            'plate_number' => 'required',
            'displacement' => 'required',
            'engine_number' => 'required',
            'year_model' => 'required'
        ]);
        $vehicle = new tbl_vehicle_infos();
        $vehicle->rider_id = $request->rider_id;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->plate_number = $request->plate_number;
        $vehicle->displacement = $request->displacement;
        $vehicle->engine_number = $request->engine_number;
        $vehicle->year_model = $request->year_model;
        $res = $vehicle -> save();

        if($res){
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
            'image'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'vehicle_front'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'vehicle_side'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'vehicle_back'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'license'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'license_back'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'cr'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'or'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'nbi'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000'
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
            
            // $filename = $photo;
            // $filename2 = $license;

            $vehicle->move('uploads/rider_documents/', $photo);
            $file ->move('uploads/rider_documents/',  $license );
            $file2->move('uploads/rider_documents/', $image);
            $file3 ->move('uploads/rider_documents/',  $cr );
            $file4->move('uploads/rider_documents/', $or);
            $file5 ->move('uploads/rider_documents/',  $drug );
            $file6 ->move('uploads/rider_documents/',  $nbi );
            $file7->move('uploads/rider_documents/', $side);
            $file8 ->move('uploads/rider_documents/',  $back );
            $file9 ->move('uploads/rider_documents/',  $license_back );


            $document->vehicle_front = $photo;
            $document->driver_license =  $license;
            $document->official_receipt = $or;
            $document->cert_registration =  $cr;
            $document->nbi_clearance = $nbi;
            $document->drug_test =  $drug;
            $document->rider_photo =  $image;
            $document->vehicle_side =  $side;
            $document->vehicle_back =  $back;
            $document->license_back =  $license_back;
        }
        $document->save();
        return redirect('rider_applicationstatus');
    }
    
    public function step5index(Request $request){
        
        $rider_id = Session::get('rider_id');
        
        $Data = tbl_rider_accounts::join('tbl_vehicle_info', 'tbl_rider_account.rider_id', '=', 'tbl_vehicle_info.rider_id')
        ->join('tbl_document_info', 'tbl_rider_account.rider_id', '=', 'tbl_document_info.rider_id')
        ->where('tbl_rider_account.rider_id', $rider_id)
        ->limit(1)
        ->get(['firstname', 'middlename', 'lastname', 'age', 'gender', 'email', 'mobile_number', 'city', 'vehicle_type', 'plate_number', 'displacement', 'engine_number', 'year_model']);
       
        return view('/rider_applicationstatus', compact('Data'));
    }
}