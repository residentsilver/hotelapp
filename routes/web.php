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

//予約メソッド
Route::get('hotel/rooms/book','HotelController@book_add');
Route::post('hotel/rooms/book','HotelController@book_create');

Route::get('hotel/room_masters','HotelController@masters_index');
Route::post('hotel/room_masters','HotelController@masters_index');

//details関連
Route::get('hotel/details','HotelController@details_index');
Route::post('hotel/details','HotelController@details_index');
Route::get('hotel/detail','HotelController@details_index1');

//bootstrap練習
Route::get('hotel/a','HotelController@a');
Route::post('hotel/a','HotelController@a');


//template関連
Route::get('index','HotelController@index');
Route::post('index','HotelController@index');

Route::get('events','HotelController@agent_single');
Route::post('events','HotelController@agent_single');

Route::get('reservation','HotelController@reservation');
Route::post('reservation','HotelController@reservation');

Route::get('rooms','HotelController@rooms');
Route::post('rooms','HotelController@rooms');

Route::get('blog-single','HotelController@blog_single');
Route::post('blog-single','HotelController@blog_single');

Route::get('contact','HotelController@contact');
Route::post('contact','HotelController@contact');

Route::get('property-grid','HotelController@property_grid');
Route::post('property-grid','HotelController@property_grid');

Route::get('property-single','HotelController@property_single');
Route::post('property-single','HotelController@property_single');

Route::get('about','HotelController@about');
Route::post('about','HotelController@about');