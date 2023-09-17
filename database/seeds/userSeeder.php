<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'vieri', 'email' => 'vieri@gmail.com', 'password' => bcrypt('vieri123'), 'role' => 'admin'],
            ['username' => 'fahrain', 'email' => 'fahrain@gmail.com', 'password' => bcrypt('fahrain123'), 'role' => 'admin'],
            ['username' => 'michael', 'email' => 'michael@gmail.com', 'password' => bcrypt('michael123'), 'role' => 'user'],
            ['username' => 'eric', 'email' => 'eric@gmail.com', 'password' => bcrypt('eric123'), 'role' => 'user'],
        ]);
    }
}
