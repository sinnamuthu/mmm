<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentprofileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\DasboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/learn/main');
});

Route::get('/course', function () {
    return view('/learn/course');
})->middleware('auth');

Route::get('/coursewatch', 'App\Http\Controllers\CourseController@coursewatch');

Route::get('/coursedata', 'App\Http\Controllers\CourseController@coursedata');

Route::get('/createstudent', 'App\Http\Controllers\StudentprofileController@createstudent');

Route::get('/createbatch', 'App\Http\Controllers\StudentprofileController@createbatch');

Route::post('/addstudent', 'App\Http\Controllers\StudentprofileController@addstudent')->name('addstudent');

Route::post('/addcourse', 'App\Http\Controllers\CourseController@addcourse')->name('addcourse');

//vk

Route::post('/instructor', 'App\Http\Controllers\InstructorController@store')->name('newinstructor');
Route::post('/batch', 'App\Http\Controllers\BatchController@store')->name('newbatch');


Route::post("authenticate",[LoginController::class,'authenticate'])->name('authenticate');

//Route::resource('/createstudent', StudentprofileController::class);

Route::get('/createcourse', 'App\Http\Controllers\CourseController@createcourse');

// vkdashboard 

Route::get('/dashboard', 'App\Http\Controllers\DasboardController@index')->name('dashboard') ->middleware('auth');
    
   

//adminviewprofile
Route::get('/adminviewprofile', function () {
    return view('/admin/adminviewprofile');
})->name('adminviewprofile');

//admineditprofile
Route::get('/admineditprofile', function () {
    return view('/admin/admineditprofile');
})->name('admineditprofile');

//createinstructor
Route::get('/createinstructor', function () {
    return view('/admin/create-instructor');
})->name('createinstructor');

//instructorflow
Route::get('/instructor', 'App\Http\Controllers\instructorController@index')->name('instructor');

//batch
Route::get('/batch', 'App\Http\Controllers\BatchController@index')->name('batch');

//createbatch
Route::get('/createbatch', function () {
    return view('/admin/create-batch');
})->name('createbatch');

//insedit
Route::get('/editinstructor', function () {
    return view('/admin/edit-instructor');
})->name('editinstructor');

//insdel
Route::get('/delinstructor/{instructor_id}','App\Http\Controllers\instructorController@destroy')->middleware('auth') ->name('delinstructor');






//login credentials
Route::get('/login', function () {return view('login');})->middleware('guest');
Route::post("authenticate",[LoginController::class,'authenticate'])->name('authenticate');
Route::get('/logout',[LoginController::class,'logout']);

//admin view profile
//Route::resource("/admin_view", AdminController::class)->middleware('auth');
Route::get('/admin_view/edit/{encryptedId}', [AdminController::class, 'edit'])->name('admin_view.edit');
Route::post('/admin_view/update/{encryptedId}', [AdminController::class, 'update'])->name('admin_view.update');



