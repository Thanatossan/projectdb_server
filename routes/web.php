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
    return view('home');
});

Route::get('/1', function () {
    return view('customerprofile');
});

Route::get('/2', function () {
    return view('welcome');
});

Route::get('/3', function () {
    return view('auth.login');
});

Route::resource('users','Usercontroller');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');