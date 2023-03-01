<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Home extends Controller
{
    //
    public function index(){
        Session::pull('status');
        return view('index');
    }
    public function AccountType(){
        return view ('account_type');
    }
    public function RiderLoginIndex(){
        return view('rider_login');
    }
    public function LoginType(){
        return view ('login_type');
    }
}