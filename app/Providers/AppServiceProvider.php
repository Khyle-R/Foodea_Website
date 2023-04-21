<?php

namespace App\Providers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Models\tbl_partner_accounts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        view()->composer(['Admin_product','admin.index', 'admin.dashboard', 'admin.admin_orders', 'admin.category'],function ($view){
         $logIndata = array();
        if(Session::has('loginID')){
            $logIndata = tbl_partner_accounts::join('merchant_document', 'tbl_merchant_account.merchant_id', '=', 'merchant_document.merchant_id')
            ->join('tbl_merchant_info', 'tbl_merchant_account.merchant_id', '=', 'tbl_merchant_info.merchant_id')
            ->where('tbl_merchant_account.merchant_id', '=', Session::get('loginID'))
            ->first();
            
        }
            $view->with('logIndata', $logIndata);
            
        }); 
    }
    
}