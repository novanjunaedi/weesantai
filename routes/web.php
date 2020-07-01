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

Route::get('/', 'MainController@index');
Route::get('/destination', 'MainController@destination');
Route::get('/login', 'MainController@login');
Route::get('/signup', 'MainController@signup');
Route::get('/about', 'MainController@about');
Route::get('/contact', 'MainController@contact');

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/index', function () {
    return view('main.index');
});
