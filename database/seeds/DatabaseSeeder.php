<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(showroomseed::class);
        $this->call(userSeeder::class);
        $this->call(brand::class);
        $this->call(carseed::class);
        
    }
}
