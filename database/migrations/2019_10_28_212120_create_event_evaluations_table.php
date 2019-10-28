<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->biginteger('reference_id')->unsigned();
            $table->foreign('reference_id')->references('id')->on('evaluation_references');

            $table->biginteger('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');

            $table->string('score');

            $table->bigInteger('trainee_id')->unsigned();

            $table->biginteger('trainer_id')->unsigned();
            $table->foreign('trainer_id')->references('id')->on('users');

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
        Schema::dropIfExists('event_evaluations');
    }
}
