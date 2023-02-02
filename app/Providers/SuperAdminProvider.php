<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use App\Models\admin_account;
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
        view()->composer(['superadmin.superadmin_dashboard'] ,function ($view){
            $superadminData = array();
            if(Session::has('adminID')){
                $superadminData = admin_account::where('admin_id', '=', Session::get('adminID'))->first();
            }
                $view->with('superadminData', $superadminData);
        });
    }
}