<?php

namespace App\Http\Controllers;
// use App\Hotel_room_master;
use Illuminate\Http\Request;

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

public function books(Request $request)
{
    return view('template.books');
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

}
