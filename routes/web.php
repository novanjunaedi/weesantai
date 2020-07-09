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
Route::get('/dashboard', 'DashboardController@index')->middleware('auth:role', 'checkRole:admin');

// Route::get('/', function () {
//     return view('main.index');
// });

Route::get('/', 'MainController@index');
Route::get('/destination', 'MainController@destination');
Route::get('/about', 'MainController@about');
Route::get('/contact', 'MainController@contact');

// Auth
Route::get('/login', 'AuthController@login')->name('login')->middleware('guest:role');
Route::post('/login', 'AuthController@postLogin');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@postRegister');
Route::get('/logout', 'AuthController@logout');
