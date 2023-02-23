<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\RegisterData;
use App\SaveNewEmployeeData;
class Admincontroller extends Controller
{
  	    //View CreateNewEmployee
     public function CreateNewEmployee(){
     	 if(session()->get('role')=='Admin'){

          return view('Login.Admin.CreateNewEmployee');
         }
         else{
 	       return redirect('404error');
         }

      }
                
     public function SaveCreateNewEmployee(Request $req){
     	if(session()->get('role')=='Admin'){
          $SaveEmployeeData = new SaveNewEmployeeData;
  
           $validator= $req->validate([
           'EmpId' => 'required',
           'F_Name' => 'required|min:3|max:255',
           'L_Name' => 'required|min:3|max:255',
           'gender' => 'required',
           'checkbox' => 'required',
            ]);
// dd($req->Start_Date);
             $SaveEmployeeData->EmpId = $req->EmpId;
             $SaveEmployeeData->F_Name = $req->F_Name;
             $SaveEmployeeData->L_Name = $req->L_Name;
             $SaveEmployeeData->gender = $req->gender;
             $SaveEmployeeData->skills =json_encode($req->checkbox);
             $SaveEmployeeData->Start_Date = $req->Start_Date;
             $SaveEmployeeData->created_on =Session()->get('name');
             $SaveEmployeeData->updated_on =Session()->get('name');

             $SaveEmployeeData->save();
             return redirect('ViewEmployeeDetails');
           }
       else{
 	           return redirect('404error');
           }

       
        }

     public function ViewEmployeeDetails(){
 	
 	      if(session()->get('role')=='Admin'){

 	         $ViewEmployeeData = SaveNewEmployeeData::all();
              return view('Login.Admin.EmployeeData',['ViewEmployeeData'=>$ViewEmployeeData]);
           }
       else{
 	        return redirect('404error');
           }
    }
    public function Employeeeditdata($id){
       if(session()->get('role')=='Admin'){
	        $SaveNewEmployeeData=SaveNewEmployeeData::find($id);
            
	        return view('Login.Admin.UpdateEmployee',compact('SaveNewEmployeeData'));
        }
    else{
 	      return redirect('404error');
       }
  }
 public function UpdateNewEmploye(Request $req,$id){
 	  if(session()->get('role')=='Admin'){
 	       $SaveNewEmployeeData =SaveNewEmployeeData::find($id);
            // dd($SaveNewEmployeeData->Start_Date);
           $validator= $req->validate([
           'EmpId' => 'required',
           'F_Name' => 'required|min:3|max:255',
           'L_Name' => 'required|min:3|max:255',
           'gender' => 'required',
           'checkbox' => 'required',
           ]);
             $SaveNewEmployeeData->EmpId = $req->EmpId;
             $SaveNewEmployeeData->F_Name = $req->F_Name;
             $SaveNewEmployeeData->L_Name = $req->L_Name;
             $SaveNewEmployeeData->gender = $req->gender;
             $SaveNewEmployeeData->skills =json_encode($req->checkbox);
           
             $SaveNewEmployeeData->Start_Date = $req->Start_Date;
             $SaveNewEmployeeData->created_on =Session::get('name');
             $SaveNewEmployeeData->updated_on =Session::get('name');

             $SaveNewEmployeeData->update();
 
             // $SaveNewEmployeeData=SaveNewEmployeeData::find($id);
              // return view('Login.Admin.EmployeeData',['ViewEmployeeData'=>$ViewEmployeeData]);
             return Redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/ViewEmployeeDetails');
        }
    else{
 	     return redirect('404error');
        }

   }
 public function delete($id){
       if(session()->get('role')=='Admin'){
	      $Delete=SaveNewEmployeeData::find($id);
	      $Delete->delete();
	           return Redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/ViewEmployeeDetails');
	      }
	  else{
 	         return redirect('404error');
          }
  }
  public function logout(){
         
        // if(Session::has('id')){
          // Session::pull('role');
                session()->forget('id');
                session()->forget('name');
                session()->forget('role');

            return redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/Login');

       // }

 }
 public function ViewAdminAndNonAdminEmployeeDetails(){
 	if(session()->get('role')=='Admin'){
         $admins = RegisterData::get();
         return view('Login.Admin.ViewUsers',['admins'=>$admins]);
      }
  else{
 	    return redirect('404error');
      }
 }

 public function ViewNonAdminEmployeeDetails(){
 	 if(session()->get('role')=='NonAdmin'){
        $Nonadmin = RegisterData::select('*')->where('role','NonAdmin')->get();
        return view('Login.Non_Admin.Non_AdminViewEmployee',['Nonadmin'=>$Nonadmin]);
       }
   else{
 	return redirect('404error');
       }
 }
}