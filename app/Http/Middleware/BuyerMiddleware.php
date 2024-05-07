<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BuyerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(
            Auth::guard('buyer')->check()  || 
            Auth::guard('seller')->check() || 
            Auth::guard('admin')->check()  
        ){
            return $next($request);
        }
        session(['url.intended' => url()->current()]);
        return redirect('/login');
    }
}