<?php

use Illuminate\Support\Facades\Route;

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
 Route::get('/',"AdminHomeController@dashboard");

 //class route

 Route::get('/addSection',"ClassSectionController@addSchoolSection")->name("addclasssection");
 Route::get('/listSection',"ClassSectionController@listSchoolSection")->name("listclasssection");
 Route::get('/addclass',"SchoolClassController@addSchoolclass")->name("addclass");
 Route::get('/listclass',"SchoolClassController@listSchoolclass")->name("listclass");

 //faculty route

 Route::get('/addtype',"FacultyTypeController@addFacultytype")->name("addtype");
 Route::get('/listype',"FacultyTypeController@listFacultytype")->name("listtype");
 Route::get('/addfaculty',"FacultyController@addFaculties")->name("addfaculty");
 Route::get('/listfaculty',"FacultyController@listFaculties")->name("listfaculty");


 //students route

Route::get('/addstudent',"StudentController@addstudents")->name("addstudent");
Route::get('/liststudent',"StudentController@liststudents")->name("liststudent");