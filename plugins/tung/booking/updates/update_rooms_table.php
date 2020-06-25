<?php namespace Tung\Booking\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateRoomsTable extends Migration
{
    public function up()
    {
        Schema::table('tung_booking_rooms', function (Blueprint $table) {
            $table->integer('room_type_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_booking_bookings');
    }
}
