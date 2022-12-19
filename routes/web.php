<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\RiderRegistration;
use App\Http\Controllers\Admin_product;
use App\Http\Controllers\Admin_product\removeProduct;

Route::get('/', [Home::class, 'index'])->name('home.index');

Route::get('/rider_application', [RiderRegistration::class, 'index'])->name('rider_application.index');

Route::post('/rider_application', [RiderRegistration::class, 'addPostSubmit'])->name('rider_application.addPostSubmit');

Route::get('/rider_application3', [RiderRegistration::class, 'step2index'])->name('rider_application3.step2index');

Route::post('/rider_application3', [RiderRegistration::class, 'addVehicle'])->name('rider_application3.addVehicle');

Route::post('/rider_application4', [RiderRegistration::class, 'SaveDocuments'])->name('rider_application4.SaveDocuments');

Route::get('/rider_application4', [RiderRegistration::class, 'step4index']);

Route::get('/rider_applicationstatus', [RiderRegistration::class, 'step5index']);

Route::get('/sample', [RiderRegistration::class, 'getAllData'])->name('sample.getAllData');


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
Route::get('/rider_vehicle', function () {
    return view('rider_vehicle');
});


// ===========================Admin====================

Route::view('admin_personal','admin.admin_personal');

//Add product
Route::get('/add_product',[Admin_product::class, 'addProductView'])->name('add_product.addProductView');
Route::post('/add_product',[Admin_product::class, 'addProduct'])->name('add_product.addProduct');

//Remove product
Route::get('/product/remove/{id}',[Admin_product::class, 'removeProduct']);

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