<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RiderStep2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

         /*RIDERS */
        if(Session::get('status') == 'first')
        {
            return redirect('rider_application2');
            
        }
        if( Session::get('status') == 'second')
        {
            return redirect('rider_vehicle_type');
            
        }
        if(Session::get('status') == 'vehicle_type')
        {
            return redirect('rider_application3');
        }
        if(Session::get('status') == 'bicycle')
        {
            return redirect('/rider_bike_requirements');
        }
        if( Session::get('status') == 'third')
        {
            return redirect('rider_application4');
            
        }
         if( Session::get('status') == 'Pending')
        {
            return redirect('rider_application5');
            
        }
        /*MERCHANT */
         if(Session::get('partnerstatus') == 'first')
        {
            return redirect('partner_application2');
            
        }
        if( Session::get('partnerstatus') == 'second')
        {
            return redirect('partner_application3');
            
        }
        if(Session::get('partnerstatus') == 'Third')
        {
            return redirect('/partner_requirements');
        }
        
         if( Session::get('partnerstatus') == 'Pending')
        {
            return redirect('partner_application4');
            
        }

        $response = $next($request);
        return $response->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
}
}