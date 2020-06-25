<?php namespace Tung\Booking\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('tung_booking_rooms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('room_name',190);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_booking_rooms');
    }
}
