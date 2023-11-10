<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'book_id' =>1,
            'guests_id' =>1,
            'number_of_people' =>2,
            'checkin_date' =>'2023-11-05 15:19:23',
            'checkout_date' =>'2023-11-06 15:19:23',
        ];
        DB::table('hotel_books')->insert($param);

        $param =[
            'book_id' =>2,
            'guests_id' =>2,
            'number_of_people' =>2,
            'checkin_date' =>'2023-11-03 15:19:23',
            'checkout_date' =>'2023-11-06 18:19:23',
        ];
        DB::table('hotel_books')->insert($param);

        $param =[
            'book_id' =>3,
            'guests_id' =>2,
            'number_of_people' =>2,
            'checkin_date' =>'2023-11-01 15:19:23',
            'checkout_date' =>'2023-11-04 18:19:23',
        ];
        DB::table('hotel_books')->insert($param);
    }
}
