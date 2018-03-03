<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('groups', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 64);
            $table->string('slug', 10);
            $table->string('url', 255);
            $table->text('description');
            $table->string('profile_image', 255);
        });
    }

    public function down()
    {
        Schema::drop('groups');
    }
}
