<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index(){
        return view('superadmin.superadmin_index');
    }
     public function changepass(){
        return view('superadmin.superadmin_changepassword');
    }
}