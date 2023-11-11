<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(HotelGuestsTableSeeder::class);
         $this->call(HotelBooksTableSeeder::class);
         $this->call(HotelRoomMastersTableSeeder::class);
         $this->call(HotelRoomsTableSeeder::class);
        $this->call(HotelBookDetailsTableSeeder::class);
    }
}
