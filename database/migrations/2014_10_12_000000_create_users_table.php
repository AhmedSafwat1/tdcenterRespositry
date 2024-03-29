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
            $table->string('phone_number');
            $table->string('home_phone')->nullable();
            $table->string('username');
            // $table->boolean('verified')->default(0);
            $table->boolean('active')->default(false);
            $table->string('activation_token');
            $table->text('upload_file');
            $table->timestamps();
            // $table->boolean('is_deleted')->default(0);
            $table->softDeletes();
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
