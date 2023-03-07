<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
        'superadminLogin' =>[
            \App\Http\Middleware\SuperadminLogIn::class,
        ],
        'preventBack' =>[
            \App\Http\Middleware\PreventBrowserBackHistory::class,
        ],
        'preventBackLogin' =>[
            \App\Http\Middleware\PreventBackLogIn::class,
        ],
        'adminLogin' => [
            \App\Http\Middleware\AdminLogin::class,
        ],
        'adminPreventBack' =>[
            \App\Http\Middleware\AdminPreventback::class,
        ],
        'RiderStep1' =>[
            \App\Http\Middleware\RiderStep1::class,
        ],
        'RiderStep2' =>[
            \App\Http\Middleware\RiderStep2::class,
        ],
        'RiderStep3' =>[
            \App\Http\Middleware\RiderStep3::class,
        ],
        'RiderStep4' =>[
            \App\Http\Middleware\RiderStep4::class,
        ],
         'RiderStepFinal' =>[
            \App\Http\Middleware\RiderStepFinal::class,
        ],
         'RiderStatus' =>[
            \App\Http\Middleware\RiderStatus::class,
        ],
        'PartnerStep1' =>[
            \App\Http\Middleware\PartnerStep1::class,
        ],
         'PartnerStep2' =>[
            \App\Http\Middleware\PartnerStep2::class,
        ],
         'PartnerStep3' =>[
            \App\Http\Middleware\PartnerStep3::class,
        ],
         'PartnerStep4' =>[
            \App\Http\Middleware\PartnerStep4::class,
        ],
         'PartnerStepStatus' =>[
            \App\Http\Middleware\PartnerStepStatus::class,
        ],
        
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \App\Http\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

    ];
}