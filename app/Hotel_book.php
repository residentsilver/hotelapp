<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book extends Model
{
    protected $guarded = array('book_id');
    protected $primaryKey = 'book_id';
    protected $dates = ['checkin_date', 'checkout_date'];


    public function guests(){
        return $this->belongsTo('App\Hotel_guest','guests_id','guests_id');
    }
    // public function getData() 
    // {
    //     return $this->id.': '.$this->name.' ('.$this->price.')';
    // }

    public function room()
    {
        // belongsToMany(相手のモデル、中間テーブルの名前、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー)　編集前
        return $this->belongsToMany('App\Hotel_room','hotel_book_details','room_id','book_id')->withPivot('book_detail_id','stay_days','stay_price');
    }

    // public function room()
    // {
    //     // belongsToMany(相手のモデル、中間テーブルの名前、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー)　編集後
    //     return $this->belongsToMany('App\Hotel_room','hotel_book_details','book_id','room_id');
    //     // ->withPivot('stay_days','stay_price');
    // }
}
