<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use auth;
class MemberMiddleware
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
        if(Auth::user()->role !== "USR"){
            $request->session()->flush();
            return redirect('/login');
        }
        return $next($request);
    }
}
