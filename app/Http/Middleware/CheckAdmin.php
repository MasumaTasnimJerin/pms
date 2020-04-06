<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckAdmin
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
   if($userRoles === 'admin' or $userRoles==='pharmacist'){
   return $next($request);
   }
   return redirect('login');
     }
}
