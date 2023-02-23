<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginData;
use App\RegisterData;
use Hash;
use Session;
class LoginController extends Controller
{
    //   public function create()
    // {
    //     return view('registration.create');
    // }
     public function CheckLogin(Request $req)
    {
    
           $req->validate([
          'name' => 'required|min:3|max:255',
          'password' => 'required',

        
    ]);   
          $login = RegisterData::where('name','=',$req->name)->where('password','=',$req->password)->first();
           if($login){
         	  if(!Hash::check($req->password,$login->password)){
          	  	
          		  $req->session()->put('id', $login->id);
                $req->session()->put('name', $login->name);
                $req->session()->put('role', $login->role);

              
          		  return redirect('dashboard');
             	 }
          	    else
               	{
               		 return view('Login');
                   // return back()->with('fail','password is not matching');
            	}
            	           	
            }
          	else
          	{
          		return back()->with('fail','This User name or Password is not Registered');
          	}


          
}
public function dashboard()
       {
    	 return view('Login.dashboard');
        }
      }