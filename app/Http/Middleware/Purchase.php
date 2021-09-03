<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Purchase
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
        if(Auth()->user())
        {
            if(Auth()->user()->payments()->first() == null)
            {
                return $next($request); 
            }
            else 
            {
                return redirect('/videos');
            }
        }
        else {
            return $next($request);
        }
        
    }
}
