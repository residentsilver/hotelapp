<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book_details extends Model
{

    protected $primaryKey = 'book_detail_id';

    public function user(){
        return $this->belongsTo('App\Hotel_book','book_id','book_id');
        }
    
        public function user1(){
            return $this->belongsTo('App\Hotel_room','room_id','room_id');
            }
        
    }
