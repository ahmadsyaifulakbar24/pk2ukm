<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
	        return $next($request);
    	} else if ($role == 200) {
	        return redirect('dinkot/dashboard');
    	} else {
	        return redirect('pendamping/dashboard');
    	}
    }
}
