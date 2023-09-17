<?php

use Illuminate\Database\Seeder;

class brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brans')->insert([
            ['bran' => 'Toyota'], 
            ['bran' => 'Honda'],
            ['bran' => 'Mitsubishi'],
        ]);
    }
}
