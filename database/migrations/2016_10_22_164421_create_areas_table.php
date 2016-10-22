<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_admin_id')->unsigned()->index();
            $table->foreign('area_admin_id')->references('id')->on('users');
            $table->string('name',50);
            $table->float('latitude_min');
            $table->float('latitude_max');
            $table->float('longitude_min');
            $table->float('longitude_max');
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
        Schema::drop('areas');
    }
}
