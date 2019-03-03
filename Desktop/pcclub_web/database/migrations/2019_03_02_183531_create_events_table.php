<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('tag_line');
            $table->string('slug');
            $table->unsignedBigInteger('attachment_id')->nullable();
            $table->text('about_event');
            $table->text('event_theme')->nullable();
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');
            $table->integer('duration')->nullable();
            // $table->string('location');
            $table->integer('min_participants')->default(2);
            $table->string('fees');
            $table->boolean('registeration_status')->default(0);
            $table->boolean('active')->default(1);
            $table->timestamps();

            $table->foreign('attachment_id')->references('id')->on('attachments')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
