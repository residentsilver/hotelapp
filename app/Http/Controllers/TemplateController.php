<?php

namespace App\Http\Controllers;
// use App\Hotel_room_master;
use Illuminate\Http\Request;
use App\Hotel_book;
use App\Hotel_book_details;
use App\Hotel_guest;
use App\Hotel_room;
use App\Hotel_room_master;
use App\User;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use Carbon\Carbon;

class TemplateController extends Controller
{
//template
public function index(Request $request)
{
    return view('template.index');
}

public function guests(Request $request)
{
    return view('template.guests');
}

public function room_master(Request $request)
{
    return view('template.room_masters');
}

//books
// public function books(Request $request)
// {
//     return view('template.books');
// }

//予約メソッド
public function book_add(Request $request){
    $books = Hotel_room::find($request ->id);
    return view('template.books' , ['form' =>$books]);
}

//格納する情報を限定したい
public function book_create(Request $request){
 
    $books =new Hotel_book();
    $form = $request->all();
    unset($form['_token']);
    $books->guests_id = $request->input('guests_id');
    $books->number_of_people = $request->input('number_of_people');
    $books->checkin_date = $request->input('checkin_date');
    $books->checkout_date = $request->input('checkout_date');
    $books ->save();

    $details = new Hotel_book_details();
    // $details->book_id = $request->input('book_id');
    $details->book_id = $books->book_id;
    $details->room_id = $request->input('room_id');
    $details->stay_days =$books->checkout_date->diffInDays($books->checkin_date) ;
    $details->stay_price =  $books->book_id;//stay_priceをと決めておく必要あり
    $details ->save();
    $guests =$books->guests();
    return view('template.complete', ['books' =>$books], ['details' =>$details],$guests);
}




public function books_details(Request $request)
{
    return view('template.');
}

public function blog_single(Request $request)
{
    return view('template.blog-single');
}

public function contact(Request $request)
{
    return view('template.contact');
}

public function rooms(Request $request)
{
    return view('template.rooms');
}

public function complete(Request $request)
{
    return view('template.complete');
}

}
