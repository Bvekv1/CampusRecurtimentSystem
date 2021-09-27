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

Route::view('/', 'welcome');
Auth::routes();
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/student',
'Auth\LoginController@showStudentLoginForm');
Route::get('/register/admin',
'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/student',
'Auth\RegisterController@showStudentRegisterForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/student',
'Auth\RegisterController@createStudent');
Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/student', 'student');
Route::get('studentid', function () {
    return view('studentid');
});
Route::get('studentid', function () {
    return view('studentid');
});

Route::get('/postJob', function () {
  return view('postJob');    
});
Route::post('/postJob', 'Company@postJob');  

/*Route::post('/viewJob', 'Company@viewJob');*/
Route::get('/viewJob/{id}','Company@viewJob');

/*Route::get('/viewJob', function(){
    return view('showJob');

});*/
Route::get('/deleteJob/{id}','Company@deleteJob');
Route::get('/updateJob/{id}', 'Company@updateJob');
Route::get('/update/{id}', 'Company@editJob');
//Route to retrive data from database
Route::get('/editProfileCompany/{id}', 'Company@editProfileCompany');

//Route to update record in database
Route::get('/updateCompanyProfile/{id}', 'Company@updateCompanyProfile');

//Route to retrive student profile data from database
Route::get('/editProfileStudent/{id}','Students@editProfileStudent');

//Route to update query for student profile edit
Route::get('/updateStudentProfile/{id}','Students@updateStudentProfile');

//Route to retrive jobs details from jobs table for user student
Route::get('/viewJobStudent', 'Students@viewJobStudent');

//Route to store details of student who applied for job
Route::post('/applyJob', 'Students@applyJob');

//Route to retrive applicants details from database
Route::get('/viewApplicant/{id}', 'Company@viewApplicant');

//Route to delete applicants by company
Route::get('deleteApplicant/{id}', 'Company@deleteApplicant');

//Route to show the company details to the admin
Route::get('/companyList', 'Admin@ListCompany');

//Route to delete company
Route::get('/deleteCompany/{id}','Admin@deleteCompany');

//Route to show the student details to the admin
Route::get('/studentList', 'Admin@ListStudent');

//Route to delete student record
Route::get('/deleteStudent/{id}','Admin@deleteStudent');

//Route to show the job details to the admin
Route::get('/jobList','Admin@ListJob');

//Route to delete job
Route::get('/deleteJob/{id}','Admin@deleteJob');

//Route to show the application details to the admin
Route::get('/applicationList','Admin@ListApplication');

//Route to delete application details by admin
Route::get('/deleteApplicantAdmin/{id}','Admin@deleteApplicantAdmin');

Route::get('/profile','Students@Profile');

//Route to upload image to database
Route::post('profile', 'Students@update_avatar');

//Route to search Job
Route::post('searchJob', 'Students@searchJob');
//ROute to serch Student
Route::post('searchStudent', 'Admin@searchStudent');

//Route to search Company
Route::post('searchCompany', 'Admin@searchCompany');

//Route to search Job for admin
Route::post('searchJob','Admin@searchJob');

//ROute to add cv
Route::post('uploadFile', 'Students@uploadFile');

//Route to add blade
Route::get('/add', function () {
    return view('add');    
  });

 Route::post('uploadfile/{id}','Students@uploadFilePost');

 Route::get('studentResume/{id}','Students@viewCV');

 Route::get('/userManual', function(){
     return view('userManual');
 });




 


