<?php

use Illuminate\Database\Seeder;

class UsersAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'David Polania',
            'email' => 'david.polaniaac@gmail.com',
            'password' => bcrypt('r6R7sdEhDF'),
            'type' => 'admin',
        ]);
    }
}
