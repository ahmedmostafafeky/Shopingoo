<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended('/admin/dashboard');
        }
        else if (Auth::guard('seller')->check()) {
            return redirect()->intended('/seller');
        }
        else if (Auth::guard('buyer')->check()) {
            return redirect()->intended('/profile');
        }
        return $next($request);
    }
}
