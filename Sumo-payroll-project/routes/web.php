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
Route::get('/', function () {
return view('Login.Create');
});
//login view url
Route::get('/login', function () {
return view('Login.Create');
}); 
//check login after move admin or Non-admin url
Route::post('checklogin','LoginController@checkLogin');
Route::get('logout','Admincontroller@logout');
Route::group(['middleware'=>'LoginAuthcheck'],function(){
Route::get('dashboard','LoginController@dashboard');
//Admin
Route::get('createNewEmp','Admincontroller@createNewEmployee');
Route::post('saveCreateNewEmployee','Admincontroller@saveCreateNewEmployee');
Route::get('employeEditData/{id}','Admincontroller@employeeEditData');
Route::put('updateNewEmployee/{id}','Admincontroller@updateNewEmploye');
Route::get('delete/{id}','Admincontroller@delete');
Route::get('viewEmployeeDetails','Admincontroller@viewEmployeeDetails');
Route::get('viewAdminAndNonAdminEmployeeDetails','Admincontroller@viewAdminAndNonAdminEmployeeDetails')->middleware('LoginAuthcheck');
// Route::get('ViewUserDetails','Admincontroller@ViewEmployeeDetails');
Route::get('404error', function () {
return view('Login.404error');
}); 
Route::get('adminpage_404_error', function () {
return view('Login.Adminpage_404_error');
});
// Route::get('/{any}','Admincontroller@Adminpage');
});
//Non-Admin
Route::get('viewNonAdminEmployeeDetails','Admincontroller@viewNonAdminEmployeeDetails');



