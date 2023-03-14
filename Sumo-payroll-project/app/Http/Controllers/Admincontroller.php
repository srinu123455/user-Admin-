<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\RegisterData;
use App\SaveNewEmployeeData;
class Admincontroller extends Controller
{
  	    //View CreateNewEmployee
     public function createNewEmployee(){
     	 if(session()->get('role')=='Admin'){

          return view('Login.Admin.CreateNewEmployee');
         }
     else{
 	       return redirect('404error');
         }

      }
                
     public function saveCreateNewEmployee(Request $req){
     	if(session()->get('role')=='Admin'){
          $saveEmployeeData = new SaveNewEmployeeData;
  
           $validator= $req->validate([
           'EmpId' => 'required',
           'F_Name' => 'required|min:3|max:255',
           'L_Name' => 'required|min:3|max:255',
           'gender' => 'required',
           'checkbox' => 'required',
           ]);
             $saveEmployeeData->emp_id = $req->EmpId;
             $saveEmployeeData->f_name = $req->F_Name;
             $saveEmployeeData->l_name = $req->L_Name;
             $saveEmployeeData->gender = $req->gender;
             $saveEmployeeData->skills =json_encode($req->checkbox);
             $saveEmployeeData->start_date = $req->Start_Date;
             $saveEmployeeData->created_by =Session()->get('name');
             $saveEmployeeData->updated_by =Session()->get('name');
             $saveEmployeeData->save();
             return redirect('viewEmployeeDetails');
        }
    else{
 	           return redirect('404error');
        }
     }

     public function viewEmployeeDetails(){
 	
 	      if(session()->get('role')=='Admin'){
          $viewEmployeeData = SaveNewEmployeeData::all();

            $viewEmployeeData = SaveNewEmployeeData::paginate(3);

 	                      return view('Login.Admin.viewEmployeeData',['viewEmployeeData'=>$viewEmployeeData]);
           }
       else{
 	        return redirect('404error');
           }
    }
    public function employeeEditData($id){

       if(session()->get('role')=='Admin'){

	        $editNewEmployeeData=SaveNewEmployeeData::find($id);
            
	        return view('Login.Admin.UpdateEmployee',compact('editNewEmployeeData'));

        }
    else{
 	      return redirect('404error');
       }
  }
 public function updateNewEmploye(Request $req,$id){
 	  if(session()->get('role')=='Admin'){
 	       $updateEmployeeData =SaveNewEmployeeData::find($id);
            // dd($SaveNewEmployeeData->Start_Date);
           $validator= $req->validate([
           'EmpId' => 'required',
           'F_Name' => 'required|min:3|max:255',
           'L_Name' => 'required|min:3|max:255',
           'gender' => 'required',
           'checkbox' => 'required',
           ]);
             $updateEmployeeData->emp_id = $req->EmpId;
             $updateEmployeeData->f_name = $req->F_Name;
             $updateEmployeeData->l_name = $req->L_Name;
             $updateEmployeeData->gender = $req->gender;
             $updateEmployeeData->skills =json_encode($req->checkbox);
             $updateEmployeeData->start_date = $req->Start_Date;
             // dd($updateEmployeeData->updated_by);
             // $updateEmployeeData->created_by =Session::get('name');
             // $updateEmployeeData->updated_by =RegisterData::select('name')->where(name,'=',Session::get('name'))->get();

             $updateEmployeeData->updated_by =Session::get('name');
             $updateEmployeeData->update();
 
             // $SaveNewEmployeeData=SaveNewEmployeeData::find($id);
              // return view('Login.Admin.EmployeeData',['ViewEmployeeData'=>$ViewEmployeeData]);
             return Redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/viewEmployeeDetails');
        }
    else{
 	     return redirect('404error');
        }

   }
 public function delete($id){

       if(session()->get('role')=='Admin'){
	      $delete=SaveNewEmployeeData::find($id);
	      $delete->delete();
	           return Redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/viewEmployeeDetails');
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

            return redirect('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/login');

       // }

 }
 public function viewAdminAndNonAdminEmployeeDetails(){
 	if(session()->get('role')=='Admin'){
         $admins = RegisterData::get();
         return view('Login.Admin.ViewUsers',['admins'=>$admins]);
      }
  else{
 	    return redirect('404error');
      }
 }

 public function viewNonAdminEmployeeDetails(){
 	 if(session()->get('role')=='NonAdmin'){
        // $Nonadmin = RegisterData::select('*')->where('role','NonAdmin')->get();
    $Nonadmin = SaveNewEmployeeData::get();
        return view('Login.Non_Admin.Non_AdminViewEmployee',['Nonadmin'=>$Nonadmin]);
       }

       else
       {
       	return redirect('adminpage_404_error');
       }
 }
   // public function Adminpage(){
   //   if(session()->get('role')=='Admin'){
   //    return redirect('Adminpage_404_error');
   //  }
   //  else if(session()->get('role')=='NonAdmin'){
   //      return redirect('404_error');
   //  }
   //  else{
   //    return false;
   //  }
  
   //     } 

}