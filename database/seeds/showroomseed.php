<?php

use Illuminate\Database\Seeder;

class showroomseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            [
                'show_name' => 'Bengkel Mobil KJ Autocare',
                'show_type'=> 'Workshop',
                'address' => ' jalan jendral sudirman no.12 (Persis Sebelah Apartemen Psragon Square Tangerang, RT.002/RW.007, Babakan, Tangerang, Tangerang City, Banten 15118',
                'hour' => '8AM-5PM',
                'phone' => '123-654',
                'photo' =>'Bengkel_Mobil_KJ_Autocare.png',
            ],
            [
                'show_name' => 'Hikmah AC',
                'show_type'=> 'Workshop',
                'address' => 'Jl. Jenderal Sudirman, RT.001/RW.004, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15119',
                'hour' => '9AM-5PM',
                'phone' => '123-456',
                'photo' =>'Hikmah_AC.png',
            ],
            [
                'show_name' => 'Showroom Toyota Tangerang City',
                'show_type'=> 'Showroom',
                'address' => 'Jl. Jenderal Sudirman, RT.005/RW.005, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118',
                'hour' => '24 Hours',
                'phone' => '456-123',
                'photo' =>'Showroom_Toyota_Tangerang_City.png',
            ],
            [
                'show_name' => 'Basana Mobilindo',
                'show_type'=> 'Showroom',
                'address' => 'West Panunggangan, Cibodas, Tangerang City, Banten',
                'hour' => '8AM-5:30PM',
                'phone' => '231-546',
                'photo' =>'Basana_Mobilindo.png',
            ]
        ]);
    }
}
