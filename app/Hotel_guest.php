<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_guest extends Model
{

protected $guarded = array('id');


// public static $rules =array (
//     '' =>'',
//     '' =>'required' ,
//     '' => 'integer|min:0|max:150000'
// );

public function Hotel_books()
{
    return $this->hasMany('APP\Hotel_book');
}
}
