<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'     => 'Manas Sahoo',
        'username' => 'manas',
        'email'    => 'manas@vanilla.in',
        'password' => Hash::make('awesome'),
        ]);
    }
}
