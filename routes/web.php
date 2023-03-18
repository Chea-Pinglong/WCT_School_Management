<?php

// use Illuminate\Support\Facades\Route;

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

// Route::fallback(function(){
//     return "<h1>Sorry Page not existed</h1>";
// });

Route::get('/', function () {
    return view('Login');
})->name('/');

Route::get('/Register', function(){
    return view('Register');
})->name('Register');

Route::get('/Admin', function(){
    return view('Admin.index');
})->name('Admin.index');

Route::get('/Admin/Attendance', function(){
    return view('Admin.Attendance');
})->name('Admin.Attendance');

Route::get('/Login', function(){
    return view('Login');
})->name('Login');

Route::get('/Admin/Class', function(){
    return view('Admin.Class');
})->name('Admin.Class');


Route::get('/Admin/Schedule', function () {
    return view('Admin.Schedule');
})->name('Admin.Schedule');


Route::get('/Admin/Result', function () {
    return view('Admin.Result');
})->name('Admin.Result');


Route::get('/Admin/Calender', function () {
    return view('Admin.Calender');
})->name('Admin.Calender');


Route::get('/Admin/Student', function () {
    return view('Admin.Student');
})->name('Admin.Student');


Route::get('/Admin/Teacher', function () {
    return view('Admin.Teacher');
})->name('Admin.Teacher');



