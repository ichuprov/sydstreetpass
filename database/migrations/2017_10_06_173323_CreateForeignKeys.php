<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table( 'scheduled_events', function( Blueprint $table ) {
            $table->foreign( 'location_id' )->references( 'id' )->on( 'locations' )
                  ->onDelete( 'restrict' )
                  ->onUpdate( 'restrict' );
        } );
        Schema::table( 'scheduled_events', function( Blueprint $table ) {
            $table->foreign( 'registration_status_id' )->references( 'id' )->on( 'enum_event_registration_statuses' )
                  ->onDelete( 'restrict' )
                  ->onUpdate( 'restrict' );
        } );
        Schema::table( 'groups_users', function( Blueprint $table ) {
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )
                  ->onDelete( 'restrict' )
                  ->onUpdate( 'restrict' );
        } );
        Schema::table( 'groups_users', function( Blueprint $table ) {
            $table->foreign( 'group_id' )->references( 'id' )->on( 'groups' )
                  ->onDelete( 'restrict' )
                  ->onUpdate( 'restrict' );
        } );
        Schema::table( 'user_event_registrations', function( Blueprint $table ) {
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )
                  ->onDelete( 'restrict' )
                  ->onUpdate( 'restrict' );
        } );
        Schema::table( 'user_event_registrations', function( Blueprint $table ) {
            $table->foreign( 'event_id' )->references( 'id' )->on( 'scheduled_events' )
                  ->onDelete( 'restrict' )
                  ->onUpdate( 'restrict' );
        } );
        Schema::table( 'user_event_registrations', function( Blueprint $table ) {
            $table->foreign( 'user_registration_status_id' )->references( 'id' )->on( 'enum_user_event_registrations' )
                  ->onDelete( 'restrict' )
                  ->onUpdate( 'restrict' );
        } );
    }

    public function down()
    {
        Schema::table( 'scheduled_events', function( Blueprint $table ) {
            $table->dropForeign( 'scheduled_events_location_id_foreign' );
        } );
        Schema::table( 'scheduled_events', function( Blueprint $table ) {
            $table->dropForeign( 'scheduled_events_registration_status_id_foreign' );
        } );
        Schema::table( 'groups_users', function( Blueprint $table ) {
            $table->dropForeign( 'groups_users_user_id_foreign' );
        } );
        Schema::table( 'groups_users', function( Blueprint $table ) {
            $table->dropForeign( 'groups_users_group_id_foreign' );
        } );
        Schema::table( 'user_event_registrations', function( Blueprint $table ) {
            $table->dropForeign( 'user_event_registrations_user_id_foreign' );
        } );
        Schema::table( 'user_event_registrations', function( Blueprint $table ) {
            $table->dropForeign( 'user_event_registrations_event_id_foreign' );
        } );
        Schema::table( 'user_event_registrations', function( Blueprint $table ) {
            $table->dropForeign( 'user_event_registrations_user_registration_status_id_foreign' );
        } );
    }
}
