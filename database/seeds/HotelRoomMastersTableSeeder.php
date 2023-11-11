<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelRoomMastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            'room_type_id' =>1,
            'room_name' =>'洋室',
            'room_stay_people' =>2,
        ];
        DB::table('hotel_room_masters')->insert($param);

        $param =[
            'room_type_id' =>2,
            'room_name' =>'和室',
            'room_stay_people' =>4,
        ];
        DB::table('hotel_room_masters')->insert($param);

        $param =[
            'room_type_id' =>3,
            'room_name' =>'VIP',
            'room_stay_people' =>8,
        ];
        DB::table('hotel_room_masters')->insert($param);

        
    }
}
