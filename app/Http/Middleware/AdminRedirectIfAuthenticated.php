<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = 'web_admin')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/admin/home');
        }

        return $next($request);
    }
}
