<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->bigInteger('room_type_id')->unsigned(); // unsigned で正の値のみを許可
            $table->foreign('room_type_id')
                ->references('room_type_id')
                ->on('hotel_room_masters')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');
            $table->string('room_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_rooms');
    }
}
