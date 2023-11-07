<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book extends Model
{
    protected $guarded = array('id');

    public function Hotel_guests(){
        return $this->belongsTo('App\Hotel_guest');
    }
}
