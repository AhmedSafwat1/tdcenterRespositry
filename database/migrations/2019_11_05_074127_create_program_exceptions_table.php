<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramExceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_exceptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->biginteger('faculty_id')->unsigned();
            $table->foreign('faculty_id')->references('id')->on('faculties');
            $table->biginteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->biginteger('degree_id')->unsigned();
            $table->foreign('degree_id')->references('id')->on('degrees');
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
        Schema::dropIfExists('program_exceptions');
    }
}
