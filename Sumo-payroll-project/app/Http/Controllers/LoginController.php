<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginData;
use App\RegisterData;
use App\SaveNewEmployeeData;

use Hash;
use Session;
class LoginController extends Controller
{
    //   public function create()
    // {
    //     return view('registration.create');
    // }
     public function checkLogin(Request $req)
     {
        // $rules = [
        //      'name' => 'required|min:3|max:255',
        //      'password' => 'required',
        //       'g-recaptcha-response' => 'required|recaptcha',
        //  ];
        //  $this->validate($req,$rules,[
        //   'name.required' => 'please enter name',
        //      'password.required' => 'please enter password',
        //       'g-recaptcha-response.recaptcha' => ' recaptcha',
        //        'g-recaptcha-response.required' => ' recaptcha'
        //  ]);
    
       $req->validate([
             'name' => 'required|min:3|max:255',
             'password' => 'required',
              
          // 'captcha'=>'required'
        
       ]);   
      
       $login =RegisterData::where('name','=',$req->name)->where('password','=',$req->password)->first();
       
           if($login){ 
         	  // if(!Hash::check($req->password,$login->password)){
                    	  	
          		  $req->session()->put('id', $login->id); 
                $req->session()->put('name', $login->name);              
                
                $req->session()->put('role', $login->role);
                 return redirect('dashboard');
          //     }
          // else
          //     {
          //      	 return view('Login.create');
          //          // return back()->with('fail','password is not matching');
          //   	}
            	           	
            }
        else
            {
          		return back()->with('fail','This User name or Password is not Registered');
            }


          
      }
      public function dashboard(){
         $viewEmployeeData = SaveNewEmployeeData::all();
         $viewEmployeeData = SaveNewEmployeeData::paginate(5);
        $Nonadmin = SaveNewEmployeeData::get();
        return view('Login.dashboard',['Nonadmin'=>$Nonadmin,'viewEmployeeData'=>$viewEmployeeData]);
    	    // return view('Login.dashboard');
      } 
         
}