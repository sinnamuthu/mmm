<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentprofileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
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

//Route::resource('/createstudent', StudentprofileController::class);

Route::get('/createcourse', 'App\Http\Controllers\CourseController@createcourse');

//dashboard 
Route::get('/coursedashboard', function () {
    return view('/admin/dashboard1');
});
Route::get('/batchdashboard', function () {
    return view('/admin/dashboard2');
})->name('batchdashboard');

//login credentials
Route::get('/login', function () {return view('login');})->middleware('guest');
Route::post("authenticate",[LoginController::class,'authenticate'])->name('authenticate');
Route::get('/logout',[LoginController::class,'logout']);

//admin view profile
Route::get('/admin_view/edit/{encryptedId}', [AdminController::class, 'edit'])->name('admin_view.edit');





