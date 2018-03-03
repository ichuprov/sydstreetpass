<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduledEventsTable extends Migration
{
    public function up()
    {
        Schema::create('scheduled_events', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 64);
            $table->dateTime('date_time');
            $table->integer('location_id')->unsigned();
            $table->string('short_description', 255);
            $table->text('long_description');
            $table->integer('registration_status_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('scheduled_events');
    }
}
