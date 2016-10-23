<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();

            $table->enum('type', ['FAMILY_MEMBER', 'FAMILY_ADMIN', 'AREA_ADMIN', 'DEVICE_ADMIN']);
            $table->float('latitude');
            $table->float('longitude');
            $table->integer('area_id')->unsigned()->index();
            //$table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

            $table->enum('gender', ['MALE', 'FEMALE', 'OTHER']);
            $table->integer('age');
            $table->integer('family_id')->unsigned()->index();
            $table->integer('criteria_id')->unsigned()->index();
            //$table->foreign('family_id')->references('id')->on('familys')->onDelete('cascade');
            //$table->foreign('criteria_id')->references('id')->on('criterias')->onDelete('cascade');

            $table->string('adharcard_number',20)->unique();
            $table->string('mobile_number',15);
            $table->string('rfid_card_number',64)->unique();

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
        Schema::drop('users');
    }
}
