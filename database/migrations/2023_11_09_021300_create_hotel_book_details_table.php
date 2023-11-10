<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelBookDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_book_details', function (Blueprint $table) {
            $table->bigIncrements('book_detail_id');
            $table->bigInteger('book_id')->unsigned(); // unsigned で正の値のみを許可
            $table->foreign('book_id')
                ->references('book_id')
                ->on('hotel_books')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');
            $table->bigInteger('room_id')->unsigned(); // unsigned で正の値のみを許可
                $table->foreign('room_id')
                    ->references('room_id')
                    ->on('hotel_rooms')
                    ->onDelete('RESTRICT')
                    ->onUpdate('RESTRICT');
            $table->integer('stay_days');
            $table->integer('stay_price');
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
        Schema::dropIfExists('hotel_book_details');
    }
}
