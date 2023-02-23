<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class Authcheck
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
       
        if(!Session()->has('id')){
       
        
           return redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/Login')->with('fail','You have login first');
         }
         
        return $next($request);
    
                  
     
    }
}
