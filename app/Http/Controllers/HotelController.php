<?php

namespace App\Http\Controllers;

use App\Hotel_book;
use App\Hotel_book_details;
use App\Hotel_guest;
use App\Hotel_room;
use App\Hotel_room_master;
use Illuminate\Http\Request;

class HotelController extends Controller
{

//hotel guestモデル
    public function guests_index(Request $request)
    {
        $items = Hotel_guest::all(); 
        return view('hotel.index_guests',['items' => $items]);//indexファイルへitems変数を送る。
    }

    public function edit(Request $request){
        $guests = Hotel_guest::find($request ->id);
        return view('hotel.index_guests_edit' , ['form' =>$guests]);
}

    public function update(Request $request) {
        // $this->validate($request, Hotel_guest::$rules);
        $guests = Hotel_guest::find($request->id);
        $form = $request->all();
        unset ($form['_token']);
        $guests -> fill($form)->save();
        return redirect('/hotel/guests');
    }

    public function delete(Request $request){
        $guests = Hotel_guest::find($request ->id);
        return view('hotel.index_guests_del' , ['form' =>$guests]);
}

    public function remove(Request $request) {
        Hotel_guest::find($request->id)->delete();
        return redirect('/hotel/guests');
    }

//hotel booksモデル
    public function books_index(Request $request)
    {
        $items = Hotel_book::all(); 
        return view('hotel.index_books',['items' => $items]);//indexファイルへitems変数を送る。
    }



    
//hotel roomsモデル
public function rooms_index(Request $request)
{
    $items = Hotel_room::all(); 
    return view('hotel.index_rooms',['items' => $items]);//indexファイルへitems変数を送る。
}

//hotel room masterモデル
public function masters_index(Request $request)
{
    $items = Hotel_room_master::all(); 
    return view('hotel.index_room_masters',['items' => $items]);//indexファイルへitems変数を送る。
}

//hotel book detailsモデル
public function details_index(Request $request)
{
    $items = Hotel_book_details::all(); 
    return view('hotel.index_details',['items' => $items]);//indexファイルへitems変数を送る。
}


}
