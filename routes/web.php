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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/','shopController@index') -> name('shop.index');
Route::get('/shop/{product}','shopController@show')->name('shop.show');
Route::get('/product/{product}','shopController@show')->name('shop.show');


Auth::routes();


Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/manageProduct','AdminController@manageProduct') -> name("admin.mant.product");
    Route::post('/manageProduct','AdminController@insert');
    Route::post('/manageProduct/{productCode}','AdminController@delete');
    Route::get('/manageProduct/edit/{productCode}','AdminController@editProduct');
    Route::post('/manageProduct/edit/{productCode}','AdminController@updateProduct');
    // Route::resource('manageProduct','AdminController');
    // Route::post('/manageProduct','AdminController@delete');    
// Route::get('/admin','AdminController@index');
// Route::post('/admin','AdminController@insert');
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
    Route::post('/addcustomer','addcustomerController@insert');

    Route::get('/info/{customerNumber}','AdminController@edit_customer')->name('admin.cus.edit');
    Route::post('/info/{customerNumber}','AdminController@address');
    Route::post('/info/delete/{addressNumber}','AdminController@deleteAddress');

});


//Route::get('/status', 'OrdersController@index');

// Route::get('/status', 'OrdersController@index');

