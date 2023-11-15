<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelGuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'guests_id' =>1,
            'guests_name' =>'田中',
            'guests_address' =>'東京都千代田区永田町１丁目７−１',
            'guests_tel' =>'03-3581-3100',
        ];
        DB::table('hotel_guests')->insert($param);

        $param =[
            'guests_id' =>'2',
            'guests_name' =>'佐々木',
            'guests_address' =>'京都府京都市下京区東塩小路町７２１−１',
            'guests_tel' =>'075-361-3215',
        ];
        DB::table('hotel_guests')->insert($param);

        $param =[
            'guests_id' =>3,
            'guests_name' =>'井上',
            'guests_address' =>'大阪府１丁目７−１',
            'guests_tel' =>'03-2151-0336',
        ];

        $param =[
            'guests_id' =>4,
            'guests_name' =>'豊田',
            'guests_address' =>'愛知県９丁目１３−１',
            'guests_tel' =>'0215-11-0266',
        ];
        DB::table('hotel_guests')->insert($param);
    }
}
