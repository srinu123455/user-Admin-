<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    //login view url
Route::get('Login', function () {
    return view('Login.Create');
}); 
     //check login after move admin or Non-admin url
Route::post('Checklogin','LoginController@CheckLogin');
Route::get('logout','Admincontroller@logout');
      
Route::group(['middleware'=>'LoginAuthcheck'],function(){
Route::get('dashboard','LoginController@dashboard');
//Admin
Route::get('CreateNewEmp','Admincontroller@CreateNewEmployee');
Route::post('SaveCreateNewEmployee','Admincontroller@SaveCreateNewEmployee');

Route::get('Employeeditdata/{id}','Admincontroller@Employeeeditdata');
Route::put('UpdateNewEmployee/{id}','Admincontroller@UpdateNewEmploye');
Route::get('delete/{id}','Admincontroller@delete');

Route::get('ViewEmployeeDetails','Admincontroller@ViewEmployeeDetails');
// Route::get('ViewUserDetails','Admincontroller@ViewEmployeeDetails');
Route::get('ViewAdminAndNonAdminEmployeeDetails','Admincontroller@ViewAdminAndNonAdminEmployeeDetails')->middleware('LoginAuthcheck');
});
//Non-Admin
Route::get('ViewNonAdminEmployeeDetails','Admincontroller@ViewNonAdminEmployeeDetails');


Route::get('404error', function () {
    return view('Login.404error');
}); 