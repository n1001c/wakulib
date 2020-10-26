<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
            [
                'name' => 'kuwa',
                'email' => 'kuwa@kuwa.com',
                'password' => 'password'
            ],
            [
                'name' => 'kazu',
                'email' => 'kazu@kuwa.com',
                'password' => 'password'
            ],
        ]);
    }
}
