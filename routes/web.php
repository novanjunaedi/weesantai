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
Route::get('/about', 'MainController@about');
Route::get('/contact', 'MainController@contact');
Route::get('/detail_list', 'MainController@detail_list');
Route::get('/detail-wisata', 'MainController@detail_wisata');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth:role', 'checkRole:admin');

// Auth
Route::get('/login', 'AuthController@login')->name('login')->middleware('guest:role');
Route::post('/login', 'AuthController@postLogin');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@postRegister');
Route::get('/logout', 'AuthController@logout');

Route::get('/index', function () {
    return view('main.index');
});


Route::get('/e-ticket', 'TicketController@index');
Route::get('/e-ticket/pdf', 'TicketController@pdf');

Route::get('/add-destination', 'DestinationController@index');
Route::post('/add-destination/create', 'DestinationController@create');
Route::get('/add-destination/{id}/edit', 'DestinationController@edit');
Route::post('/add-destination/{id}/update', 'DestinationController@update');
Route::get('/add-destination/{id}/delete', 'DestinationController@delete');
