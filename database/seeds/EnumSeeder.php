<?php

use Illuminate\Database\Seeder;

class EnumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds =
            [
                [
                    'name' => 'Registration Open',
                    'slug' => 'open'
                ],
                [
                    'name' => 'Registration Closed',
                    'slug' => 'closed'
                ]
            ];
        DB::table( 'enum_event_registration_statuses' )->insert( $seeds );

        $seeds =
            [
                [
                    'name' => 'Invited to Event',
                    'slug' => 'invited'
                ],
                [
                    'name' => 'Going to Event',
                    'slug' => 'going'
                ],
                [
                    'name' => 'Might Be Going to Event',
                    'slug' => 'maybe'
                ],
                [
                    'name' => 'Not Going to Event',
                    'slug' => 'notgoing'
                ]
            ];
        DB::table( 'enum_user_event_registrations' )->insert( $seeds );

    }
}
