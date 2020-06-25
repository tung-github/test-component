<?php namespace Tung\Booking\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBookingRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('tung_booking_booking_rooms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('booking_id');
            $table->integer('room_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_booking_booking_rooms');
    }
}
