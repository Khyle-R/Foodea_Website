<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '*'
        // 'superadmin_login',
        // 'rider_application',
        // 'rider_application3',
        // 'rider_application4',
        // 'rider_applicationstatus',
        // 'login',
        // 'product/*',
        // 'category/*',
        // 'inventory/*',
        // 'admin_orders',
        // 'voucher/*'
        //
    ];
}