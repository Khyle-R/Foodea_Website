<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/login_partner', function () {
    return view('login_partner');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/partner_application', function () {
    return view('partner_application');
});
Route::get('/partner_application1', function () {
    return view('partner_application1');
});
Route::get('/partner_application2', function () {
    return view('partner_application2');
});
Route::get('/partner_application3', function () {
    return view('partner_application3');
});
Route::get('/partner_application4', function () {
    return view('partner_application4');
});
Route::get('/partner_landing', function () {
    return view('partner_landing');
});
Route::get('/rider_application', function () {
    return view('rider_application');
});
Route::get('/rider_application1', function () {
    return view('rider_application1');
});
Route::get('/rider_application2', function () {
    return view('rider_application2');
});
Route::get('/rider_application3', function () {
    return view('rider_application3');
});
Route::get('/rider_application4', function () {
    return view('rider_application4');
});
Route::get('/rider_landing', function () {
    return view('rider_landing');
});
Route::get('/rider_vehicle', function () {
    return view('rider_vehicle');
});
Route::get('/sample', function () {
    return view('sample');
});