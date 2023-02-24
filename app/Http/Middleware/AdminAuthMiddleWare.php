<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleWare
{
    public function handle(Request $request, Closure $next)
    {
        if(!empty(Auth::user())){
            if(url()->current() == route('sell#login')){
                return back();
            }

            if (Auth::user()->role == 'user') {
                return back();
            }

            return $next($request);
        }
        return $next($request);
    }
}
