<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->hasRole('user')||auth()->user()->hasRole('supplier')) {


            return $next($request);
        }

            abort(403,'Siz bu routga ruxsat berilmagan');
    }
}
