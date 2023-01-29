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
        view()->composer(['admin.index', 'admin.dashboard'],function ($view){
         $logIndata = array();
        if(Session::has('loginID')){
            $logIndata = tbl_partner_accounts::where('merchant_id', '=', Session::get('loginID'))->first();
        }
            $view->with('logIndata', $logIndata);
        }); 
    }
    
}