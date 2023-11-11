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

//hotel_guests関連
Route::get('hotel/guests','HotelController@guests_index');
Route::post('hotel/guests','HotelController@guests_index');

Route::get('hotel/guests/edit','HotelController@edit'); 
Route::post('hotel/guests/edit','HotelController@update');

Route::get('hotel/guests/del','HotelController@delete');
Route::post('hotel/guests/del','HotelController@remove');

Route::get('hotel/guests/add','HotelController@add');
Route::post('hotel/guests/add','HotelController@create');

Route::get('hotel/guests/find','HotelController@find');
Route::post('hotel/guests/find','HotelController@search');

//hotel_books関連
Route::get('hotel/books','HotelController@books_index');
Route::post('hotel/books','HotelController@books_index');

Route::get('hotel/books/edit','HotelController@books_edit');
Route::post('hotel/books/edit','HotelController@books_update');

Route::get('hotel/books/del','HotelController@books_delete');
Route::post('hotel/books/del','HotelController@books_remove');

//hotel_rooms関連

Route::get('hotel/rooms','HotelController@rooms_index');
Route::post('hotel/rooms','HotelController@rooms_index');

Route::get('hotel/room_masters','HotelController@masters_index');
Route::post('hotel/room_masters','HotelController@masters_index');

Route::get('hotel/details','HotelController@details_index');
Route::post('hotel/details','HotelController@details_index');
