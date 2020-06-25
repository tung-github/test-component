<?php namespace Tung\Booking\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateRoomTypesTable extends Migration
{
    public function up()
    {
        Schema::table('tung_booking_room_types', function (Blueprint $table) {
            $table->dropColumn('room_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_booking_bookings');
    }
}
