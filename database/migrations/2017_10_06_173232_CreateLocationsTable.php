<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 64);
            $table->string('slug', 10);
            $table->string('address', 255);
            $table->float('latitude');
            $table->float('longitude');
            $table->string('type', 20);
        });
    }

    public function down()
    {
        Schema::drop('locations');
    }
}
