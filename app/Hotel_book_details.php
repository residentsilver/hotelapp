<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book_details extends Model
{

    protected $primaryKey = 'book_detail_id';
    protected $dateFormat = 'Y-m-d';
    protected $dates = ['checkin_date', 'checkout_date'];



    // public function book(){
    //     return $this->belongsTo('App\Hotel_book','book_id','book_id');
    //     }
    
    //     public function room(){
    //         return $this->belongsTo('App\Hotel_room','room_id','room_id');
    //         }
        

    // // 多対多のリレーション
    // public function room()
    // {
    //     // belongsToMany(相手のモデル、中間テーブルの名前、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー)
    //     return $this->belongsToMany('App\Hotel_room','hotel_room','room_type_id','room_type_id');
    // }

    }
