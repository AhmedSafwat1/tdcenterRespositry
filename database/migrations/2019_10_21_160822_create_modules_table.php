<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->timestamps();
        });
        $module =  new \App\Module;
        $module->name_ar = "فتره صباحيه";
        $module->name_en = "Morning period";
        $module->save();

        $module =  new \App\Module;
        $module->name_ar = "فتره مسائيه";
        $module->name_en = "Evening period";
        $module->save();

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
