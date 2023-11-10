<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_room_master extends Model
{
    protected $guarded = array('room_type_id');
}
