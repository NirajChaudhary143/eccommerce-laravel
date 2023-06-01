<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTypeRedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // $usertype = Auth::user()->user_type;

        // if ($usertype === '0') {
        //     return redirect('/dashboard');
        // } elseif ($usertype === '1') {
        //     return redirect('/redirect');
        // }

        // return $next($request);
    }
}
