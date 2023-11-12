<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book extends Model
{
    protected $guarded = array('book_id');
    protected $primaryKey = 'book_id';

    public function guests(){
        return $this->belongsTo('App\Hotel_guest','guests_id','guests_id');
    }
    // public function getData() 
    // {
    //     return $this->id.': '.$this->name.' ('.$this->price.')';
    // }

    public function room()
    {
        // belongsToMany(相手のモデル、中間テーブルの名前、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー)
        return $this->belongsToMany('App\Hotel_room','hotel_book_details','book_id','room_id');
    }
}
