<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_room extends Model
{
    protected $primaryKey = 'room_id';
    protected $dates = ['checkin_date', 'checkout_date'];
    
    public function rooms(){
        return $this->belongsTo('App\Hotel_room_master','room_type_id','room_type_id');
    }

    public function book()
    {
        return $this->belongsToMany('App\Hotel_book','hotel_book_details','room_id','book_id')->withPivot('stay_days','stay_price');
    }

}
