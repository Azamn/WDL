<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('workshop_id');
            $table->string('duration');
            $table->string('workshop_date');
            $table->string('workshop_time');
            $table->string('location');
            $table->integer('fees');
            $table->binary('notes');
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
        Schema::dropIfExists('workshops_infos');
    }
}
