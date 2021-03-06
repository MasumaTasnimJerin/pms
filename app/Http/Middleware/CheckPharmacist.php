<?php

namespace App\Http\Middleware;
use Auth;
use Closure;


class CheckPharmacist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
       $userRoles = Auth::user()->role;
   if($userRoles==='pharmacist'){
   return $next($request);
   }
   return redirect('login');
     }
}
