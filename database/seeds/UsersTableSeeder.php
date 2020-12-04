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
        \App\User::create([
            'name' => 'M. Masykur Wildan',
            'username' => 'mwildan',
            'password' => bcrypt('password'),
            'email' => 'masykurw45@gmail.com',
        ]);
    }
}
