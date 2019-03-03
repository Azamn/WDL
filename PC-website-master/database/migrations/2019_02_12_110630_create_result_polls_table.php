<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultPollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_polls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poll_id');
            $table->integer('option1');
            $table->integer('option2');
            $table->integer('option3');
            $table->integer('option4');
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
        Schema::dropIfExists('result_polls');
    }
}
