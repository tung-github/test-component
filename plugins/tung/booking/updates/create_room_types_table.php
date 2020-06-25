<?php namespace Tung\Booking\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRoomTypesTable extends Migration
{
    public function up()
    {
        Schema::create('tung_booking_room_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('room_type_name',190);
            $table->integer('room_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_booking_room_types');
    }
}
