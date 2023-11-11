<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book_details extends Model
{

    protected $primaryKey = 'book_detail_id';

    public function book(){
        return $this->belongsTo('App\Hotel_book','book_id','book_id');
        }
    
        public function room(){
            return $this->belongsTo('App\Hotel_room','room_id','room_id');
            }
        
    }
