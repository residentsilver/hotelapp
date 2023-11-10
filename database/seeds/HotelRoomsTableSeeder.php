<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'room_id' =>1,
            'room_type_id' =>1,
            'room_number' =>101,
        ];
        DB::table('hotel_rooms')->insert($param);

        $param =[
            'room_id' =>2,
            'room_type_id' =>1,
            'room_number' =>102,
        ];
        DB::table('hotel_rooms')->insert($param);

        $param =[
            'room_id' =>3,
            'room_type_id' =>1,
            'room_number' =>103,
        ];
        DB::table('hotel_rooms')->insert($param);
    }
}
