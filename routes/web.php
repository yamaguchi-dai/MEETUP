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
    return view('Login/login');
});

Route::get('create_acount','Acount\AcountController@create');
Route::get('create_complete','Acount\AcountController@create_complete');
Route::get('login','Login\LoginController@login');
Route::get('forget_password',function(){abort('550');});

Route::get('dashboard','Dashboard\DashboardController@dashboard');
Route::get('meet_management','MeetManagement\MeetManagementController@meet_management');
