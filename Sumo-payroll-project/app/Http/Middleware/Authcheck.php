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
        if(!Session::has('id')){

        
           return redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/Login')->with('fail','You have login first');
         }
    
                    if(Session()->get('role')=='Admin'){
                      return $next($request);
                    }
                   if(Session()->get('role')=='NonAdmin'){
                     // dd(123);
                       // if(Session()->get('role')=='NonAdmin'){
                       
                       //     return redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/ViewNonAdminEmployeeDetails');
                       //   }
                       //   // else if(!Session()->get('role')=='NonAdmin'){
                       //   //    dd(123);
                       //   //    return redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/Login')->with('fail','You have login first');
                       //   // }
                       //   else{
                       //      dd(123);
                       //      return redirect('http://localhost/newproject/blog/public/shows');

                       //   }
                     return $next($request);
                      
                    }
               
                
         else{
         return redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/Login')->with('fail','You have login first');
             }
     
    }
}
