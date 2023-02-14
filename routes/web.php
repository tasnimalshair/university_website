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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Home', 'App\Http\Controllers\CourseController@Home')->name('Homepage');
Route::get('showCourses', 'App\Http\Controllers\CourseController@Courses')->name('showCourses');
Route::get('studentInfo', 'App\Http\Controllers\StudentController@StudentInfo')->name('studentInfo');
Route::get('RegisterSemester', 'App\Http\Controllers\RegisterSemesterController@Courses')->name('RegisterSemester');
