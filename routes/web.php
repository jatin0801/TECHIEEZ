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
    return view('homepage');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/helpdesk', function () {
    return view('helpdesk');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/course1', function () {
    return view('course1');
});

Route::get('/courses','HomeController@showCourses')->name('courses');
Route::get('/login','HomeController@showLogin')->name('login');
Route::get('/helpdesk','HomeController@showHelpdesk')->name('helpdesk');
Route::get('/homepage','HomeController@showHomepage')->name('homepage');
Route::get('/signup','HomeController@showSignup')->name('signup');
Route::get('/course1','HomeController@showCourse1')->name('course1');