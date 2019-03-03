<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_winners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->string('winner_name');
            $table->text('winner_college_name');
            $table->string('1runnerup_name');
            $table->text('1runner_college_name');
            $table->string('2runnerup_name');
            $table->text('2runnerup_college_name');
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
        Schema::dropIfExists('event_winners');
    }
}
