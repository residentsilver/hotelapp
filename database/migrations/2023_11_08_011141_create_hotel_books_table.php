<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_books', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->bigInteger('guests_id')->unsigned(); // unsigned で正の値のみを許可
            $table->foreign('guests_id')
                ->references('guests_id')
                ->on('hotel_guests')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');
            $table->integer('number_of_people');
            $table->datetime('checkin_date');
            $table->datetime('checkout_date');
            $table->softDeletes(); 
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
        Schema::dropIfExists('hotel_books');
    }
}
