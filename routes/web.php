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
Route::group(['middleware'=>['auth']],function(){
  Route::group(['middleware'=>['_admin']],function(){
    Route::get('/admin_dashboard', 'DashboardController@admin_dashboard')->name('admin_dashboard');
  });
});

Route::group(['middleware'=>['auth']],function(){
  Route::group(['middleware'=>['_pharmacist']],function(){
    Route::get('/pharmacist_dashboard', 'DashboardController@pharmacist_dashboard')->name('pharmacist_dashboard');
  });
});

//Dashboard
//Route::get('/admin_dashboard','DashboardController@admin_dashboard')->name('admin_dashboard');
//Route::get('/pharmacist_dashboard','DashboardController@pharmacist_dashboard')->name('pharmacist_dashboard');

Route::group(['middleware'=>'auth'],function(){
//Medicine

Route::get('/add_medicine','MedicineController@add_medicine')->name('add_medicine');
Route::post('/add_medicine','MedicineController@create_medicine')->name('create_medicine');
Route::get('/medicine_list', 'MedicineController@medicine_list')->name('medicine_list');
Route::get('/medicine_update/{id}', 'MedicineController@edit')->name('medicine.edit');
Route::post('/medicine_update/{id}', 'MedicineController@update')->name('medicine.update');
Route::get('/medicine_delete/{id}', 'MedicineController@delete')->name('medicine.delete');


//Medicine Category
Route::get('/add_category','CategoryController@add_category')->name('add_category');
Route::post('/add_category','CategoryController@create_category')->name('create_category');
Route::get('/medicine_category', 'CategoryController@medicine_category')->name('medicine_category');
Route::get('/category_update/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/category_update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/category_delete/{id}', 'CategoryController@delete')->name('category.delete');


//Purchase
Route::get('/add_purchase','PurchaseController@add_purchase')->name('add_purchase');
Route::post('/add_purchase','PurchaseController@create_purchase')->name('create_purchase');
Route::get('/manage_purchase','PurchaseController@manage_purchase')->name('manage_purchase');

//Supplier
Route::get('/add_supplier','SupplierController@add_supplier')->name('add_supplier');
Route::post('/add_supplier','SupplierController@create_supplier')->name('create_supplier');
Route::get('/supplier_list','SupplierController@supplier_list')->name('supplier_list');
Route::get('/supplier_update/{id}','SupplierController@edit')->name('supplier.edit');
Route::post('/supplier_update/{id}','SupplierController@update')->name('supplier.update');
Route::get('/supplier_delete/{id}', 'SupplierController@delete')->name('supplier.delete');


//Stock
Route::get('/add_stock','StockController@add_stock')->name('add_stock');
Route::post('/add_stock','StockController@create_stock')->name('create_stock');

//User Role
Route::get('/add_role','RoleController@add_role')->name('add_role');
Route::post('/add_role','RoleController@create_role')->name('create_role');
Route::get('/role_list','RoleController@role_list')->name('role_list');
Route::get('/role_edit/{id}', 'RoleController@edit')->name('role.edit');
Route::post('/role_update/{id}', 'RoleController@update')->name('role.update');
Route::get('/role_delete/{id}', 'RoleController@delete')->name('role.delete');
//

//User List
Route::get('/user_list','UserController@user_list')->name('user_list');
Route::get('/user_update/{user}', 'UserController@user_update')->name('user_update');
Route::post('/user_update/{user}', 'UserController@update')->name('update');
});
//Expense
Route::get('/add_expense','ExpenseController@add_expense')->name('add_expense');
Route::post('/add_expense','ExpenseController@create_expense')->name('create_expense');
