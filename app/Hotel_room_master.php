<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_room_master extends Model
{
    protected $guarded = array('room_type_id');

    public function Hotel_rooms()
    {
        return $this->hasMany('App\Hotel_room','room_type_id','room_type_id');
    }

}
