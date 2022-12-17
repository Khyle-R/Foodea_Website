<?php

namespace App\Http\Controllers;


use App\Models\tbl_rider_accounts;
use App\Models\tbl_vehicle_infos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}