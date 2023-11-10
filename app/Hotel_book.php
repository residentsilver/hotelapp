<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book extends Model
{
    protected $guarded = array('book_id');
    protected $primaryKey = 'book_id';

    public function user(){
        return $this->belongsTo('App\Hotel_guest','guests_id','guests_id');
    }
}
