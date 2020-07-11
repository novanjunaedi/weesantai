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

//route detail-list
Route::get('/detail-list/Bandung', 'ListController@get_bandung');
Route::get('/detail-list/Jakarta', 'ListController@get_jakarta');
Route::get('/detail-list/Bali', 'ListController@get_bali');
Route::get('/detail-list/Yogyakarta', 'ListController@get_yogyakarta');
Route::get('/detail-list/Malang', 'ListController@get_malang');
Route::get('/detail-list/Surabaya', 'ListController@get_surabaya');
Route::get('/detail-list/Lombok', 'ListController@get_lombok');
Route::get('/detail-list/Lampung', 'ListController@get_lampung');
Route::get('/detail-list', 'ListController@get_back');
Route::get('/detail-wisata/{destination_name}', 'MainController@detail_wisata');
Route::post('/payment', 'TranscController@payment');
// Auth
Route::middleware(['guest:role'])->group(function () {
    Route::get('/login', 'AuthController@login')->name('login')->middleware('guest:role');
    Route::post('/login', 'AuthController@postLogin');
    Route::get('/register', 'AuthController@Register');
    Route::post('/register', 'AuthController@postRegister');
});

Route::get('/logout', 'AuthController@logout')->middleware('auth:role');

Route::middleware(['auth:role', 'checkRole:user,admin'])->group(function () {
    Route::get('/e-ticket', 'TicketController@index');
    Route::get('/e-ticket/pdf', 'TicketController@pdf');
});

Route::middleware(['auth:role', 'checkRole:admin'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/add-destination', 'DestinationController@index');
    Route::post('/add-destination/create', 'DestinationController@create');
    Route::get('/add-destination/{id}/edit', 'DestinationController@edit');
    Route::post('/add-destination/{id}/update', 'DestinationController@update');
    Route::get('/add-destination/{id}/delete', 'DestinationController@delete');
    Route::get('/transaction/{id}/delete', 'TranscController@delete');

    Route::get('/user', 'UserController@index');
});

Route::middleware(['auth:role', 'checkRole:user,admin'])->group(function () {
    Route::get('/user/{id}/profile', 'UserController@userprofile');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::post('/user/{id}/update', 'UserController@update');
    Route::get('/transaction', 'TranscController@index');
});
