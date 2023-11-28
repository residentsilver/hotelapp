<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hotel_guest extends Model
{
    use SoftDeletes;
    protected $guarded = array('id');
    protected $primaryKey = 'guests_id';

    //バリデーション
// public static $rules =array (
//     '' =>'',
//     '' =>'required' ,
//     '' => 'integer|min:0|max:150000'
// );


public function Hotel_books()
{
    return $this->hasMany('App\Hotel_book','guests_id','guests_id');
}

    //部分一致検索を有効化
    public function scopeNameLike($query, $search)
{
    return $query->where('guests_name', 'like', '%' . $search . '%');
}

    // public function getData() 
    // {
    //     return $this->id.': '.$this->name.' ('.$this->price.')';
    // }
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($post) {
            $post->Hotel_books()->delete();
            //Hotel_books()はhasManyの関係を作っているメソッドを呼び出している。
        });
    }

}
