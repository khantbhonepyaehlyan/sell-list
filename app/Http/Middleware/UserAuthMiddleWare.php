<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthMiddleWare
{
    public function handle(Request $request, Closure $next)
    {
         if (Auth::user()->role == 'admin') {
            return back();
        }
        return $next($request);
    }
}
