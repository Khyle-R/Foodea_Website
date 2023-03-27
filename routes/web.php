<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_product;
use App\Http\Controllers\RiderRegistration;
use App\Http\Controllers\PartnerRegistration;
use App\Http\Controllers\Admin_product\removeProduct;
use App\Http\Controllers\MailController;
use App\Http\Controllers\sample;
use App\Http\Controllers\SuperadminController;

Route::get('/partner_application_add', [PartnerRegistration::class, 'partneraddproduct']);

Route::get('/', [Home::class, 'index'])->name('home.index');

Route::get('/terms_condition', [Home::class, 'TermsCondition']);

Route::get('/mission', [Home::class, 'MissionIndex']);

Route::get('/vision', [Home::class, 'VisionIndex']);

Route::get('/privacy', [Home::class, 'Privacy']);

Route::get('/service', [Home::class, 'Service']);

Route::get('/rider_login', [RiderRegistration::class, 'RiderLoginIndex']);

Route::post('/rider_login', [RiderRegistration::class, 'RiderLogIn'])->name('RiderLogIn');

Route::get('/login_type', [Home::class, 'LoginType']);

Route::get('/rider_logout', [RiderRegistration::class, 'RiderLogout']);

Route::get('/partner_logout', [PartnerRegistration::class, 'PartnerLogout']);

Route::get('/rider_forgotpass', [RiderRegistration::class, 'RiderForgotPass']);

Route::post('/rider_forgotpasssend', [RiderRegistration::class, 'RiderForgetSend'])->name('RiderForgetSend');

Route::get('/rider_forgotpass1', [RiderRegistration::class, 'RiderForgotPass2']);

Route::post('/rider_forgotpassverify', [RiderRegistration::class, 'RiderForgotVerify'])->name('RiderForgotVerify');

Route::get('/rider_forgotpassresend', [RiderRegistration::class, 'RiderForgotResend']);

Route::get('/rider_forgotpass2', [RiderRegistration::class, 'RiderForgotPass3']);

Route::post('/rider_forgotpassreset', [RiderRegistration::class, 'RiderForgotReset'])->name('RiderForgotReset');

Route::get('/rider_forgotpass3', [RiderRegistration::class, 'RiderForgotPass4']);

Route::get('/rider_signupexit', [Home::class, 'ExitSignup'])->name('ExitSignup');



Route::get('/partner_forgotpass', [PartnerRegistration::class, 'PartnerForgotPass']);

Route::post('/partner_forgotpasssend', [PartnerRegistration::class, 'PartnerForgetSend'])->name('PartnerForgetSend');

Route::get('/partner_forgotpass1', [PartnerRegistration::class, 'PartnerForgotPass2']);

Route::post('/partner_forgotpassverify', [PartnerRegistration::class, 'PartnerForgotVerify'])->name('PartnerForgotVerify');

Route::get('/partner_forgotpassresend', [PartnerRegistration::class, 'PartnerForgotResend']);

Route::get('/partner_forgotpass2', [PartnerRegistration::class, 'PartnerForgotPass3']);

Route::post('/partner_forgotpassreset', [PartnerRegistration::class, 'PartnerForgotReset'])->name('PartnerForgotReset');

Route::get('/partner_forgotpass3', [PartnerRegistration::class, 'PartnerForgotPass4']);


Route::get('/superadmin_forgotpass', [SuperadminController::class, 'SuperadminForgotPass']);

Route::post('/superadmin_forgotpasssend', [SuperadminController::class, 'SuperadminForgetSend'])->name('SuperadminForgetSend');

Route::get('/superadmin_forgotpass1', [SuperadminController::class, 'SuperadminForgotPass2']);

Route::post('/superadmin_forgotpassverify', [SuperadminController::class, 'SuperadminForgotVerify'])->name('SuperadminForgotVerify');

Route::get('/superadmin_forgotpassresend', [SuperadminController::class, 'SuperadminForgotResend']);

Route::get('/superadmin_forgotpass2', [SuperadminController::class, 'SuperadminForgotPass3']);

Route::post('/superadmin_forgotpassreset', [SuperadminController::class, 'SuperadminForgotReset'])->name('SuperadminForgotReset');

Route::get('/superadmin_forgotpass3', [SuperadminController::class, 'SuperadminForgotPass4']);


Route::group(['middleware'=>['RiderStep2']], function(){
    
    Route::get('/rider_application_agreement', [RiderRegistration::class, 'agreement']);
    Route::get('/account_type', [Home::class, 'AccountType']);
    Route::post('/rider_applicationn', [RiderRegistration::class, 'addPostSubmit'])->name('rider_application.addPostSubmit');
});


Route::group(['middleware'=>['RiderStep1']], function(){

    Route::group(['middleware'=>['RiderStep3']], function(){
    Route::get('/rider_application2', [RiderRegistration::class, 'VerifyRider']);
    Route::post('/rider_application_2', [RiderRegistration::class, 'RiderVerify'])->name('RiderVerify');
    Route::get('/rider_application2resend', [RiderRegistration::class, 'ResendCode']);
});
    
Route::group(['middleware'=>['RiderVehicle']], function(){
    
    Route::get('/rider_vehicle_type', [RiderRegistration::class, 'VehicleType']);
    Route::post('/rider_vehicle_typeadd', [RiderRegistration::class, 'AddVehicleType'])->name('AddVehicleType');
});

Route::group(['middleware'=>['RiderStep4']], function(){
    Route::get('/rider_application3', [RiderRegistration::class, 'step2index'])->name('rider_application3.step2index');
    Route::post('/rider_application3', [RiderRegistration::class, 'addVehicle'])->name('rider_application3.addVehicle');
         });

Route::group(['middleware'=>['BikeRequirements']], function(){
    Route::get('/rider_bike_requirements', [RiderRegistration::class, 'RiderRequirements']);
    Route::post('/rider_bike_requirement', [RiderRegistration::class, 'RiderRequirementsSubmit'])->name('RiderRequirementsSubmit');
  });
    
Route::group(['middleware'=>['RiderStepFinal']], function(){
    Route::get('/rider_application4', function () {
     return view('rider_application4');
    });
      Route::post('/rider_application4', [RiderRegistration::class, 'SaveDocuments'])->name('rider_application4.SaveDocuments');

     });
   
Route::group(['middleware'=>['RiderStatus']], function(){
    Route::get('/rider_applicationstatus', [RiderRegistration::class, 'RiderApplicationStatus']);
           
    Route::get('/rider_application5', function () {
        return view('Rider_Application5');
    });
});
   

});

Route::group(['middleware'=>['PartnerStep1']], function(){

 Route::group(['middleware'=>['PartnerStep2']], function(){
    Route::get('/partner_application2', [PartnerRegistration::class, 'partner2index']);

    Route::post('/partner_application2', [PartnerRegistration::class, 'partner2submit'])->name('partner_application2.partner2submit');
 });
 
Route::group(['middleware'=>['PartnerStep3']], function(){
       Route::get('/partner_application3', [PartnerRegistration::class, 'PartnerVerifyIndex']);
       Route::post('/partner_application_3', [PartnerRegistration::class, 'PartnerVerify'])->name('PartnerVerify');
       Route::get('/partner_application3resend', [PartnerRegistration::class, 'PartnerResendCode']);
    });
 
 Route::group(['middleware'=>['PartnerStep4']], function(){
     Route::get('/partner_requirements', [PartnerRegistration::class, 'partnerrequirement']);
    Route::post('/partner_requirements', [PartnerRegistration::class, 'SaveDocuments'])->name('partner_requirements.SaveDocuments');;
 });
 Route::group(['middleware'=>['PartnerStepStatus']], function(){
     Route::get('/partner_application4', function () {
    return view('partner_application4');
    });
     Route::get('/partner_applicationstatus', [PartnerRegistration::class, 'PartnerApplicationStatus']);
  });
   
});

// SUPER ADMIN ROUTE

Route::group(['middleware'=>['preventBack']], function(){
    
Route::group(['middleware'=>['preventBackLogin']], function(){
    
    Route::get('/superadmin_login', [SuperadminController::class, 'login']);

    Route::post('/superadmin_login', [SuperadminController::class, 'LoginAdmin'])->name('login.LoginAdmin');

});
Route::group(['middleware'=>['superadminLogin']], function(){
        
    Route::get('/superadmin_index', [SuperadminController::class, 'index']);

    Route::get('/superadmin_changepass', [SuperadminController::class, 'changepass']);

    Route::get('/superadmin_logout', [SuperadminController::class, 'AdminLogOut']);

    Route::get('/superadmin_application', [SuperadminController::class, 'ApplicationsRider']);

    Route::get('/superadmin_partnerdetails/{id}', [SuperadminController::class, 'PartnerDetails']);

    Route::post('/superadmin_partnerdetailsmessage', [SuperadminController::class, 'PartnerMessage'])->name('PartnerMessage');

    Route::get('/superadmin_profile', [SuperadminController::class, 'profile']);

    Route::get('/superadmin_rider', [SuperadminController::class, 'Rider']);

    Route::get('/application_profile/{id}', [SuperadminController::class, 'ApplicationProfile']);

    Route::get('/application_profile_reject/{id}', [SuperadminController::class, 'RiderDeleteApplicationProfile']);

    Route::post('/superadmin_rider', [SuperadminController::class, 'Update'])->name('Updatemodal');

    Route::get('/superadmin_riderprofile/{id}', [SuperadminController::class, 'RiderProfile']);

    Route::post('/superadmin_riderprofile', [SuperadminController::class, 'RiderProfileUpdate'])->name('RiderProfileUpdate');

    Route::post('/superadmin_riderprofileemergency', [SuperadminController::class, 'RiderEmergencyUpdate'])->name('RiderEmergencyUpdate');
    
    Route::post('/superadmin_riderprofilemessage', [SuperadminController::class, 'RiderMessage'])->name('RiderMessage');
    
    Route::get('/superadmin_pending', [SuperadminController::class, 'Pending']);

    Route::get('/superadmin_review', [SuperadminController::class, 'Review']);

    Route::get('/superadmin_accept', [SuperadminController::class, 'Accept']);

    Route::get('/superadmin_archive', [SuperadminController::class, 'Archive']);

    Route::get('/superadmin_merchantpending', [SuperadminController::class, 'MerchantPending']);

    Route::get('/superadmin_merchantreview', [SuperadminController::class, 'MerchantReview']);

    Route::get('/superadmin_merchantaccept', [SuperadminController::class, 'MerchantAccepted']);

    Route::get('/superadmin_merchantarchive', [SuperadminController::class, 'MerchantRejected']);

    Route::get('/superadmin_partnerapplication', [SuperadminController::class, 'partner']);

    Route::get('/superadmin_merchantproile/{id}', [SuperadminController::class, 'MerchantApplicationProfile']);

    Route::get('/application_merchant_reject/{id}', [SuperadminController::class, 'MerchantDeleteApplicationProfile']);

    Route::post('/superadmin_partnerapplication', [SuperadminController::class, 'UpdateMerchant'])->name('UpdateMerchant');

    Route::get('/superadmin_log', [SuperadminController::class, 'ActivityLog']);

    Route::get('/superadmin_riderdetails/{id}', [SuperadminController::class, 'RiderDetails']);

    Route::get('/superadmin_acceptedrider', [SuperadminController::class, 'AcceptedRider']);

    Route::get('/superadmin_acceptedpartner', [SuperadminController::class, 'AcceptedPartner']);

    Route::post('/superadmin_riderdetails', [SuperadminController::class, 'RiderAccept'])->name('RiderAccept');

    Route::post('/superadmin_accepted_rider', [SuperadminController::class, 'RemoveAcceptedRider'])->name('RemoveRider');

    Route::post('/superadmin_accepted_partner', [SuperadminController::class, 'RemoveAcceptedMerchant'])->name('RemoveMerchant');

    Route::post('/superadmin_acceptedrider', [SuperadminController::class, 'AcceptedRiderUpdate'])->name('UpdateAcceptedRider');

    Route::post('/superadmin_acceptedpartner', [SuperadminController::class, 'AcceptedPartnerUpdate'])->name('UpdateAcceptedPartner');

    Route::post('/superadmin_partnerdetailsprofile', [SuperadminController::class, 'MerchantPersonalUpdate'])->name('MerchantPersonalUpdate');

    Route::post('/superadmin_partnerdetailsbusiness', [SuperadminController::class, 'MerchantBusinessUpdate'])->name('MerchantBusinessUpdate');

    Route::get('/superadmin_account', [SuperadminController::class, 'AccountIndex']);

    Route::post('/superadmin_accountpass', [SuperadminController::class, 'ChangePassAdmin'])->name('ChangePassAdmin');

    Route::post('/superadmin_accountemail', [SuperadminController::class, 'ChangeEmailAdmin'])->name('ChangeEmailAdmin');

    Route::get('/superadmin_sales', [SuperadminController::class, 'SalesIndex']);

   
});

});
 /*VIEW PDF */
    Route::get('/display_pdf/{id}/{name}', [SuperadminController::class, 'ViewPDF']);

    Route::get('/display_merchant_pdf/{id}/{name}', [SuperadminController::class, 'ViewMerchantPDF']);

    Route::get('/download_file/{id}/{name}', [SuperadminController::class, 'Download']);

    Route::get('/download_merchant_file/{id}/{name}', [SuperadminController::class, 'DownloadMerchant']);

    Route::get('/download_vehicle/{id}', [SuperadminController::class, 'DownloadVehicleZip']);

    Route::get('/download_license/{id}', [SuperadminController::class, 'DownloadLicenseZip']);

    Route::get('/download_valid_merchant/{id}', [SuperadminController::class, 'DownloadLicenseMerchantZip']);
/* END SUPERADMIN */


Route::get('/login_partner', function () {
    return view('login_partner');
});



Route::get('/partner_landing', function () {
    return view('partner_landing');
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
Route::get('/contact', [Home::class, 'ContactIndex']);

Route::post('/contact_send', [Home::class, 'ContactUssend'])->name('ContactUssend');

Route::get('/rider_vehicle', function () {
    return view('rider_vehicle');
});



// ===========================Merchant Admin====================
Route::group(['middleware'=>['preventBack']], function(){
Route::group(['middleware'=>['adminPreventBack']], function(){

    Route::get('/login',  [PartnerRegistration::class, 'LoginIndex']);

    Route::post('/login',  [PartnerRegistration::class, 'LoginMerchant'])->name('login.LoginMerchant');
});

Route::group(['middleware'=>['adminLogin']], function(){
        
    Route::get('/logout', [Admin_product::class, 'logout']);


    Route::view('admin_personal','admin.admin_personal');

    Route::get('/index', [Admin_product::class, 'dashboard']);


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

    Route::post('/product/updateInfo',[Admin_product::class, 'updateProductInfo'])->name('product.updateProductInfo');

    //View products
    Route::get('product', function () {

    $products = DB::table('tbl_product')->where('merchant_id', '=', session('loginID'))->get();

    $category = DB::table('tbl_category')->get();


    return view('admin.product', ['products' => $products, 'category' => $category]);
});

    Route::post('product',[Admin_product::class, 'addProduct'])->name('add_product');

    //View inventory
    Route::get('inventory', function(){
        
        $invent = DB::table('tbl_inventory')->where('merchant_id', '=', session('loginID'))->get();

        return view('admin.inventory', ['invent' => $invent]);
    });

    Route::view('merchant_index', 'admin.index');

    //Route::view('admin_history', 'admin.admin_history');
    Route::get('admin_history', function(){
        $history = DB::table('tbl_transaction')->where('merchant_id', '=', session('loginID'))->get();

        return view('admin.admin_history', ['history' => $history]);
    });

    // ORDERS ROUTE
    Route::get('/admin_orders', [Admin_product::class, 'Orders']);

    Route::post('/admin_orders/Pending', [Admin_product::class, 'Order_Pending'])->name('order.Pending');
    Route::post('/admin_orders/Prepapring', [Admin_product::class, 'Order_Preparing'])->name('order.Preparing');
    Route::post('/admin_orders/Delivering', [Admin_product::class, 'Order_Delivering'])->name('order.Delivering');
    Route::post('/admin_orders/Delivered', [Admin_product::class, 'Order_Delivered'])->name('order.Delivered');


    //Voucher Route
    Route::get('/voucher', [Admin_product::class, 'VoucherIndex']);
    Route::post('/voucherAdd',[Admin_product::class, 'addVoucher'])->name('voucher.addVoucher');
    Route::get('/voucherdelete/{id}',[Admin_product::class, 'deleteVoucher'])->name('voucher.deleteVoucher');
    Route::get('/voucherEnable', [Admin_product::class, 'EnableVoucher']);
    Route::get('/voucherDisable', [Admin_product::class, 'DisableVoucher']);
    Route::post('/voucher/enable', [Admin_product::class, 'Enable_Voucher'])->name('voucher.Enable'); // Update the status of the Voucher
    Route::post('/voucher/disable', [Admin_product::class, 'Disable_Voucher'])->name('voucher.Disable'); // Update the status of the Voucher
    Route::post('/voucher/update', [Admin_product::class, 'Update_Voucher'])->name('voucher.Update'); // Update the status of the Voucher

    Route::post('/claimedVoucher', [Admin_product::class, 'ClaimedVoucher'])->name('voucher.Claimed');

    //ORDER ADMIN
    //ORDER Pending
    Route::get('/orderpending', [Admin_product::class, 'OrderPending']);
    Route::get('/orderpreparing', [Admin_product::class, 'OrderPreparing']);
    Route::get('/orderdelivering', [Admin_product::class, 'OrderDelivering']);
    Route::get('/orderdelivered', [Admin_product::class, 'OrderDelivered']);

    Route::get('/admin_log', [Admin_product::class, 'ActivityLog']);
    Route::get('/admin_account', [Admin_product::class, 'AdminAccount']);
    Route::post('/admin_accountpass', [Admin_product::class, 'ChangePass'])->name('ChangePass');
    Route::post('/admin_accountemail', [Admin_product::class, 'ChangeEmail'])->name('ChangeEmail');
    


    Route::get('/business', function(){
        $id=session('loginID');

        //$accountInfo = DB::table('tbl_merchant_account')->where('merchant_id','=', $id)->first();
        $businessInfo = DB::table('tbl_merchant_account')
        ->leftJoin('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
        ->select('*')
        ->where('tbl_merchant_account.merchant_id','=',$id)
        ->first();

        return view('admin.admin_businessinformation1', ['businessInfo' => $businessInfo]);
    });


    Route::get('document',  function(){
        return view('admin.admin_partnerdocuments');
    });

    //CATEGORY
    //View Category
    Route::get('category', function () {

        $category = DB::table('tbl_category')->where('merchant_id', '=', session('loginID'))->get();

        return view('admin.category', ['category' => $category]);
    });

    //Add Category
    Route::post('/add_category',[Admin_product::class, 'addCategory'])->name('add_category.addCategory');
    //update Category
    Route::post('/update_category',[Admin_product::class, 'updateCategory'])->name('update_category.updateCategory');
    Route::get('/delete_category/{id}',[Admin_product::class, 'deleteCategory']);

    //Upload Pictures
    Route::post('/tmp-upload', [Admin_product::class, 'tmpUpload']);
    Route::delete('/tmp-upload', [Admin_product::class, 'tmpDelete']);
});
});