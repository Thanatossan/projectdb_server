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
Route::get('/loginchoose','loginchoose@index')->name('loginchoose');
Route::get('/customer', 'CustomerController@index');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    });
    
Route::get('/customer', 'CustomerController@index');
//Route::get('/status', 'OrdersController@index');
Route::resource('status','OrdersController');
Route::resource('payments','PaymentsController');
Route::post('/payments', 'PaymentsController@insert');
