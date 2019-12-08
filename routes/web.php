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

Route::get('/','shopController@index') -> name('shop.index');
Route::get('/shop/{product}','shopController@show')->name('shop.show');
Route::get('/product/{product}','shopController@show')->name('shop.show');


Auth::routes();


Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/ERM/{Sale}/','AdminController@erm')->name('admin.erm');
    Route::get('/ERM/Employee/{employeeNumber}', 'AdminController@edit')->name('admin.erm.edit');
    Route::post('/ERM/Employee/{employeeNumber}','AdminController@promote');

    Route::resource('status','OrdersController');
    Route::resource('payments','PaymentsController');
    Route::post('/payments', 'PaymentsController@insert');
    Route::get('/addstatus', 'OrdersController@create');
    Route::get('/statusedit{orderNumber}', 'OrdersController@edit');
    Route::get('/status', 'OrdersController@index');
    Route::post('/status', 'OrdersController@edit');
    Route::post('/statusedit{orderNumber}', 'OrdersController@update');
    Route::post('/addstatus', 'OrdersController@insert');
    Route::get('/manage','CustomerController@index');
    Route::get('/addcustomer','addcustomerController@index');
    //insert data
    Route::post('/addcustomer','addcustomerController@insert');
});


//Route::get('/status', 'OrdersController@index');

// Route::get('/status', 'OrdersController@index');
