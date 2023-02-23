<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
     public function create()
    {
        return view('registration.create');
    }
      public function dashboard()
    {
        return view('Login.dashboard');
    }
   
}
