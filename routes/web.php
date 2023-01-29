<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_product;
use App\Http\Controllers\RiderRegistration;
use App\Http\Controllers\PartnerRegistration;
use App\Http\Controllers\Admin_product\removeProduct;
use App\Http\Controllers\SuperadminController;

Route::get('/', [Home::class, 'index'])->name('home.index');

Route::get('/rider_application', [RiderRegistration::class, 'index'])->name('rider_application.index');

Route::post('/rider_application', [RiderRegistration::class, 'addPostSubmit'])->name('rider_application.addPostSubmit');

Route::get('/rider_application3', [RiderRegistration::class, 'step2index'])->name('rider_application3.step2index');

Route::post('/rider_application3', [RiderRegistration::class, 'addVehicle'])->name('rider_application3.addVehicle');

Route::post('/rider_application4', [RiderRegistration::class, 'SaveDocuments'])->name('rider_application4.SaveDocuments');

Route::get('/rider_application4', [RiderRegistration::class, 'step4index']);

Route::get('/rider_applicationstatus', [RiderRegistration::class, 'step5index']);

Route::get('/partner_application', [PartnerRegistration::class, 'index']);

Route::post('/partner_application', [PartnerRegistration::class, 'PersonalInfo'])->name('partner_application.PersonalInfo');

Route::get('/partner_application2', [PartnerRegistration::class, 'partner2index']);

Route::post('/partner_application2', [PartnerRegistration::class, 'partner2submit'])->name('partner_application2.partner2submit');

Route::get('/partner_requirements', [PartnerRegistration::class, 'partnerrequirement']);

Route::post('/partner_requirements', [PartnerRegistration::class, 'SaveDocuments'])->name('partner_requirements.SaveDocuments');;

Route::get('/logout', [Admin_product::class, 'logout']);

Route::get('/login',  [PartnerRegistration::class, 'LoginIndex']);

Route::post('/login',  [PartnerRegistration::class, 'LoginMerchant'])->name('login.LoginMerchant');

Route::get('/rider_application_agreement', [RiderRegistration::class, 'agreement']);

Route::get('/merchant_application_agreement', [PartnerRegistration::class, 'agreement']);

// Route::get('/sample', [RiderRegistration::class, 'getAllData'])->name('sample.getAllData');

// SUPER ADMIN ROUTE

Route::get('/superadmin_index', [SuperadminController::class, 'index']);

Route::get('/superadmin_changepass', [SuperadminController::class, 'changepass']);



Route::get('/login_partner', function () {
    return view('login_partner');
});


Route::get('/partner_application4', function () {
    return view('partner_application4');
});


Route::get('/partner_application3', function () {
    return view('partner_application3');
});

Route::get('/partner_landing', function () {
    return view('partner_landing');
});

Route::get('/rider_application1', function () {
    return view('rider_application1');
});
Route::get('/rider_application2', function () {
    return view('rider_application2');
});

Route::get('/rider_application4', function () {
    return view('rider_application4');
});
Route::get('/rider_application5', function () {
    return view('rider_application5');
});

Route::get('/rider_driverlicense1', function () {
    return view('rider_driverlicense1');
});
Route::get('/rider_driverlicense2', function () {
    return view('rider_driverlicense2');
});
Route::get('/rider_driversor', function () {
    return view('/rider_driversor');
});
Route::get('/rider_drugtestresult', function () {
    return view('/rider_drugtestresult');
});

Route::get('/rider_landing', function () {
    return view('rider_landing');
});

//ROUTE ABOUT

Route::get('/about', function () {
    return view('about');
});

//ROUTE CONTACT
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/rider_vehicle', function () {
    return view('rider_vehicle');
});



// ===========================Merchant Admin====================

Route::view('admin_personal','admin.admin_personal');

Route::get('/index', [Admin_product::class, 'dashboard']);

Route::get('/product', function () {
    return view('/admin.product');
});
//Add product
Route::get('/add_product',[Admin_product::class, 'addProductView'])->name('add_product.addProductView');
Route::post('/add_product',[Admin_product::class, 'addProduct'])->name('add_product.addProduct');

//Remove product
Route::get('/product/remove/{id}',[Admin_product::class, 'removeProduct']);

//Delete product
Route::get('/product/delete/{id}',[Admin_product::class, 'deleteProduct']);

//Restore product
Route::get('/product/restore/{id}',[Admin_product::class, 'restoreProduct']);

//Update products
Route::get('/product/update/{id}',[Admin_product::class, 'updateProduct']);

Route::post('/product/updateInfo', [Admin_product::class, 'updateProductInfo'])->name('product.updateProductInfo');

//View products
Route::get('product', function () {

    $products = DB::table('tbl_product')->get();

    return view('admin.product', ['products' => $products]);
});

//View inventory
Route::get('inventory', function(){
    
    $invent = DB::table('tbl_inventory')->get();

    return view('admin.inventory', ['invent' => $invent]);
});

Route::view('merchant_index', 'admin.index');

//Route::view('admin_history', 'admin.admin_history');
Route::get('admin_history', function(){
    $history = DB::table('tbl_transaction')->get();

    return view('admin.admin_history', ['history' => $history]);
});

Route::view('admin_orders', 'admin.admin_orders');

Route::get('account',  function(){
    return view('admin.admin_personalinformation');
});

Route::get('business',  function(){
    return view('admin.admin_businessinformation');
});

Route::get('document',  function(){
    return view('admin.admin_partnerdocuments');
});