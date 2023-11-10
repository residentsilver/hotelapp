<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelBookDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'book_detail_id' =>1,
            'book_id' =>1,
            'room_id' =>1,
            'stay_days' =>3,
            'stay_price' =>6500,
        ];
        DB::table('hotel_book_details')->insert($param);

        $param =[
            'book_detail_id' =>2,
            'book_id' =>1,
            'room_id' =>2,
            'stay_days' =>1,
            'stay_price' =>12000,
        ];
        DB::table('hotel_book_details')->insert($param);
    }
}
