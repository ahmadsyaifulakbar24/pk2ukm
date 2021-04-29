<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PendampingMiddleware
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
    	$role = session()->get('role');
    	if ($role == 1 || $role == 100) {
	        return redirect('dashboard');
    	} else if ($role == 200) {
	        return redirect('dinkot/dashboard');
    	} else {
	        return $next($request);
    	}
    }
}
