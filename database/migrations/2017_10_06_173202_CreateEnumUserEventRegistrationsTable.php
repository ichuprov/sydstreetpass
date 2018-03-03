<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnumUserEventRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('enum_user_event_registrations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->string('slug', 10);
        });
    }

    public function down()
    {
        Schema::drop('enum_user_event_registrations');
    }
}
