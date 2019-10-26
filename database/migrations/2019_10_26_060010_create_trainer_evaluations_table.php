<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('score');
            $table->timestamps();

            $table->biginteger('eval_data_id')->unsigned();
            $table->foreign('eval_data_id')->references('id')->on('evaluation_data');

            $table->biginteger('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');

            // Trainer_id FK users -> Mandatory
            // Trainee_id FK users -> optional
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainer_evaluations');
    }
}
