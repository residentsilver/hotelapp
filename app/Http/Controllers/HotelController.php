<?php

namespace App\Http\Controllers;

use App\Hotel_book;
use App\Hotel_guest;
use Illuminate\Http\Request;

class HotelController extends Controller
{

//hotel guestモデル
    public function guests_index(Request $request)
    {
        $items = Hotel_guest::all(); 
        return view('hotel.index_guests',['items' => $items]);//indexファイルへitems変数を送る。
    }

//hotel booksモデル
    public function books_index(Request $request)
    {
        $items = Hotel_book::all(); 
        return view('hotel.index_books',['items' => $items]);//indexファイルへitems変数を送る。
    }
}
