<?php namespace Tung\Booking\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('tung_booking_statuses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('status_name',190);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_booking_statuses');
    }
}
