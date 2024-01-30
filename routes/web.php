<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentprofileController;
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
});

Route::get('/coursewatch', 'App\Http\Controllers\CourseController@coursewatch');

Route::get('/coursedata', 'App\Http\Controllers\CourseController@coursedata');

Route::get('/createstudent', 'App\Http\Controllers\StudentprofileController@createstudent');

Route::get('/createbatch', 'App\Http\Controllers\StudentprofileController@createbatch');

Route::post('/addstudent', 'App\Http\Controllers\StudentprofileController@addstudent')->name('addstudent');

Route::post('/addcourse', 'App\Http\Controllers\CourseController@addcourse')->name('addcourse');

//Route::resource('/createstudent', StudentprofileController::class);

Route::get('/createcourse', 'App\Http\Controllers\CourseController@createcourse');





