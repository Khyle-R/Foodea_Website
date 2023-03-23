<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use App\Models\admin_account;
use App\Models\tbl_merchant_application;
use App\Models\tbl_rider_application;
use Illuminate\Support\ServiceProvider;

class SuperAdminProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['superadmin.superadmin_dashboard', 'superadmin.superadmin_index'] ,function ($view){
            $superadminData = array();
             $notif = array();
            if(Session::has('adminID')){
                $superadminData = admin_account::where('admin_id', '=', Session::get('adminID'))->first();
                $rider = tbl_rider_application::where('status', 'Pending')->count();
                $merchant = tbl_merchant_application::where('status', 'Pending')->count();
            }
                $view->with('superadminData', $superadminData);
                $view->with('ridercount', $rider);
                $view->with('merchantcount', $merchant);
        });
    }
}