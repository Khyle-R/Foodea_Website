<?php

namespace App\Http\Controllers;
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
        return view('rider_application');
    }

    public function addPostSubmit(Request $request)
    {
        //
        DB::table('tbl_rider_account')->insert([
            'firstname' => $request->firstname,
            'middlename' => $request-> middle,
            'lastname' => $request->lastname,
            'suffix' => $request->suffix,
            'age' => $request->age,
            'gender' => $request->gender,
            'email' => $request->email,
            'mobile_number' => $request->mobilenumber,
            'address' => $request->address,
            'city' => $request->city,
            'barangay' => $request->barangay,
            'zip_code' => $request->zip,
          
        ]);
        return back();
     
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