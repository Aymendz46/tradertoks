<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Student
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
        //check if he purchased the course
        if(Auth()->user()->payments()->first())
        {
            return $next($request); 
        }
        else 
        {
            return redirect('/purchase');
        }
        
    }
}
