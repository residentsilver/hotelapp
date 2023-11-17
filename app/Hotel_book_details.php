<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book_details extends Model
{

    protected $primaryKey = 'book_detail_id';
    protected $dateFormat = 'Y-m-d';
    protected $dates = ['checkin_date', 'checkout_date'];


//予約テーブルへのbelongsTo
    // public function book(){
    //     return $this->belongsTo('App\Hotel_book','book_id','book_id');
    //     }
    
    //部屋テーブルへのbelongsTo
    //     public function room(){
    //         return $this->belongsTo('App\Hotel_room','room_id','room_id');
    //         }
        
    }
