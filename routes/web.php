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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Dashboard
Route::get('/admin_dashboard','DashboardController@admin_dashboard')->name('admin_dashboard');
//Medicine
Route::get('/add_medicine','MedicineController@add_medicine')->name('add_medicine');
