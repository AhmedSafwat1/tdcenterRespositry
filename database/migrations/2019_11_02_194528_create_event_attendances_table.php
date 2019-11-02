<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps();

            // $table->increments('id');
            $table->string('event_type');

            // $table->int('event_id');
            $table->biginteger('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
            // $table->int('user_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->dateTime('day1_in');
            $table->dateTime('day1_out');
            $table->dateTime('day2_in');
            $table->dateTime('day2_out');
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
        Schema::dropIfExists('event_attendances');
    }
}
