<?php

namespace App\Http\Middleware;

use Closure;

class AuthAdmins
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
        // if (false == Auth::guard('admin')->check()){
        //     return redirect()->route('admin-login');
        // }
        return $next($request);
    }
}
