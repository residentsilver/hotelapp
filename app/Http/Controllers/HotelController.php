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

//      return view('book.add');がわかっていない
    public function add(Request $request){
        $number = Hotel_room_master::find($request ->room_number);
        return view('hotel.index_rooms_book' , ['form' =>$number]);
        return view('book.add');
    }

    public function create(Request $request){
        // $this->validate($request, Hotel_guest::$rules);
        $guests = new Hotel_guest;
        $form = $request->all();
        unset($form['_token']);
        $guests -> fill($form)->save();
        return redirect('/hotel/guests');
    }

    public function find(Request $request)
    {
        return view('hotel.index_guests_find',['input'=> '']);
    }

    public function search(Request $request)
    {
        // $request->input('search'); 
        $item = Hotel_guest::find($request->input('search'));
        $items = Hotel_guest::where('guests_name', 'like', '%' . $request->input('search') . '%')->get();
        $item = Hotel_guest::nameLike($request->input)->get();
        $param = ['input'=>$request->input, 'item'=>$item];
        return view('hotel.index_guests_find', $param);
}




//hotel booksモデル
    public function books_index(Request $request)
    {
        $items = Hotel_book::all(); 
        return view('hotel.index_books',['items' => $items]);//indexファイルへitems変数を送る。
    }

    public function books_edit(Request $request){
        $books = Hotel_book::find($request ->id);
        return view('hotel.index_books_edit' , ['form' =>$books]);
}



//こっちの更新は、すべての情報を書き換えている
    // public function books_update(Request $request) {
    //     // $this->validate($request, Hotel_guest::$rules);
    //     $books = Hotel_book::find($request->id);
    //     $form = $request->all();
    //     unset ($form['_token']);
    //     $books -> fill($form)->save();
    //     return redirect('/hotel/books');
    // }

    public function books_update(Request $request) {
        // $this->validate($request, Hotel_guest::$rules);
        $books = Hotel_book::find($request->id);
        // 指定のカラムを更新
        $books->update([
            'number_of_people' => $request->input('number_of_people'),
            'checkin_date' => $request->input('checkin_date'),
            'checkout_date' => $request->input('checkout_date'),
        ]);
        return redirect('/hotel/books');
    }
    

    public function books_delete(Request $request){
        $books = Hotel_book::find($request ->id);
        return view('hotel.index_books_del' , ['form' =>$books]);
}

    public function books_remove(Request $request) {
        Hotel_book::find($request->id)->delete();
        return redirect('/hotel/books');
    }

    
//hotel roomsモデル
public function rooms_index(Request $request)
{
    $items = Hotel_room::all(); 
    return view('hotel.index_rooms',['items' => $items]);//indexファイルへitems変数を送る。
}

//予約メソッド
public function book_add(Request $request){
    $books = Hotel_room::find($request ->id);
    return view('hotel.index_rooms_book' , ['form' =>$books]);
}

//格納する情報を限定したい
public function book_create(Request $request){
    $details = new Hotel_book_details();
    $books =new Hotel_book();
    $form = $request->all();
    unset($form['_token']);
    $details->guests_id = $request->input('guests_id');
    $details->number_of_people = $request->input('number_of_people');
    $details->checkin_date = $request->input('chackin_date');
    $details->checkout_Date = $request->input('checkout_date');
    $details ->save();
    $books->guests_id = $request->input('guests_id');
    $books->number_of_people = $request->input('number_of_people');
    $books->checkin_date = $request->input('chackin_date');
    $books->checkout_Date = $request->input('checkout_date');
    $books ->save();
    return redirect('/hotel');//予約が完了しましたのページになるとよさそう
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


//bootstrap練習
public function a(Request $request)
{
    // $request->input('search'); 
    return view('hotel.a');
}

}
