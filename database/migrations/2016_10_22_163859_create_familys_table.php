<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familys', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('family_admin_id')->unsigned()->index();
            //$table->foreign('family_admin_id')->references('id')->on('users')->onDelete('cascade');
            $table->float('family_income');
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
        Schema::drop('familys');
    }
}
