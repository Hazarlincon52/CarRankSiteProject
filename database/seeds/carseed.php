<?php

use Illuminate\Database\Seeder;

class carseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')-> insert([
            
            [
            'car_name' => 'terios R',
            'tipe'=> 'suv',
            'engine' => '1.500',
            'transmisi' => 'Automatic',
            'seat' => 7,
            'photo' =>'terios.jpg',
            'price' => 256000000,
            'brand_id' => 1
            ]
            ,
            [
            'car_name' => 'fortuner TRD',
            'tipe'=> 'suv',
            'engine' => '2.700',
            'transmisi' => 'Automatic',
            'seat' => 7,
            'photo'=> 'fortuner.jpg',
            'price' => 570000000,
            'brand_id' => 1
            ]
            ,
            [
            'car_name' => 'brio rs',
            'tipe'=> 'city car',
            'engine' => '1.300',
            'transmisi' => 'Automatic',
            'seat' => 5,
            'photo'=> 'brio.jpg',
            'price' => 175000000,
            'brand_id' => 2
            ]
            ,
            [
            'car_name' => 'xpander ultimo',
            'tipe'=> 'mpv',
            'engine' => '1.500',
            'transmisi' => 'Manual',
            'seat' => 7,
            'photo'=> 'xpander.jpg',
            'price' => 245000000,
            'brand_id' => 3
            ]
            ,
            [
            'car_name' => 'mobilio rs',
            'tipe'=> 'mpv',
            'engine' => '1.300',
            'transmisi' => 'Manual',
            'seat' => 7,
            'photo'=> 'mobilio.jpg',
            'price'=> 235000000,
            'brand_id' => 2
            ]
            ]);
    }
}
