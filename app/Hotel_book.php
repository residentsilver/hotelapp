<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hotel_book extends Model
{
    use SoftDeletes;
    protected $guarded = array('book_id');
    protected $primaryKey = 'book_id';
    protected $dates = ['checkin_date', 'checkout_date','deleted_at'];



    public function guests(){
        return $this->belongsTo('App\Hotel_guest','guests_id','guests_id');
    }
    // public function getData() 
    // {
    //     return $this->id.': '.$this->name.' ('.$this->price.')';
    // }

    public function room()
    {
        return $this->belongsToMany('App\Hotel_room','hotel_book_details','book_id','room_id')->withPivot('book_detail_id','stay_days','stay_price');
    }

}
