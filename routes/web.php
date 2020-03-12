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
Route::post('/add_medicine','MedicineController@create_medicine')->name('create_medicine');
Route::get('/medicine_list', 'MedicineController@medicine_list')->name('medicine_list');

//Medicine Category
Route::get('/add_category','CategoryController@add_category')->name('add_category');
Route::post('/add_category','CategoryController@create_category')->name('create_category');
Route::get('/medicine_category', 'CategoryController@medicine_category')->name('medicine_category');


//Purchase
Route::get('/add_purchase','PurchaseController@add_purchase')->name('add_purchase');
Route::post('/add_purchase','PurchaseController@create_purchase')->name('create_purchase');
Route::get('/manage_purchase','PurchaseController@manage_purchase')->name('manage_purchase');

//Supplier
Route::get('/add_supplier','SupplierController@add_supplier')->name('add_supplier');
Route::post('/add_supplier','SupplierController@create_supplier')->name('create_supplier');
Route::get('/supplier_list','SupplierController@supplier_list')->name('supplier_list');

//Stock
Route::get('/add_stock','StockController@add_stock')->name('add_stock');
Route::post('/add_stock','StockController@create_stock')->name('create_stock');

//Users Role
Route::get('/add_role','RoleController@add_role')->name('add_role');
Route::post('/add_role','RoleController@create_role')->name('create_role');
Route::get('/role_list','RoleController@role_list')->name('role_list');

//User List
Route::get('/user_list','UserController@user_list')->name('user_list');
