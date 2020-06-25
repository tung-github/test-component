<?php namespace Tung\Booking\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('tung_booking_bookings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('renter',190);
            $table->integer('person_number');
            $table->integer('room_type_id');
            $table->integer('status_id');
            $table->integer('has_checkin');
            $table->integer('has_checkout');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_booking_bookings');
    }
}
