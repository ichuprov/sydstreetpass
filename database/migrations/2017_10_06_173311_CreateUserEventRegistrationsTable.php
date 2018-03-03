<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEventRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create( 'user_event_registrations', function( Blueprint $table ) {
            $table->increments( 'id' );
            $table->integer( 'user_id' )->unsigned();
            $table->integer( 'event_id' )->unsigned();
            $table->integer( 'user_registration_status_id' )->unsigned();
        } );
    }

    public function down()
    {
        Schema::drop( 'user_event_registrations' );
    }
}
