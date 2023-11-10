<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_room extends Model
{
    protected $primaryKey = 'room_id';

    public function user(){
        return $this->belongsTo('App\Hotel_room_master','room_type_id','room_type_id');
    }
}
