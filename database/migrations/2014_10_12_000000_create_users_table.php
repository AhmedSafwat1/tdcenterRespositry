<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('fname_en');
            $table->string('fname_ar');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->enum('gender', ['male', 'female']);
            $table->date('birthdate');
            $table->string('nationality');
            $table->bigInteger('national_id');
            $table->bigInteger('phone_number');
            $table->bigInteger('home_phone');
            $table->string('username');
            $table->boolean('verified')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->text('upload_file');
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
        Schema::dropIfExists('users');
    }
}
