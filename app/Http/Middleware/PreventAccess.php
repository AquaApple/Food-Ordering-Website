<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventAccess
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
        if(!Session()->get('userName')){
            return redirect()->route('user.login.page');
        }
        return $next($request);
    }
}
