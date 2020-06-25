<?php namespace Tung\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('tung_test_categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name',190);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tung_test_categories');
    }
}
