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

Route::get('hotel/guests','HotelController@guests_index');
Route::post('hotel/guests','HotelController@guests_index');

Route::get('hotel/books','HotelController@books_index');
Route::post('hotel/books','HotelController@books_index');
