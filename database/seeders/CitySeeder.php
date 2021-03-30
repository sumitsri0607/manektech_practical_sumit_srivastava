<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('city')->insert([
            'state_id' => '1',
            'name' => 'Faizabad'   
        ]);

        \DB::table('city')->insert([
            'state_id' => '1',
            'name' => 'Lucknow'   
        ]);

        \DB::table('city')->insert([
            'state_id' => '2',
            'name' => 'Ahmedabad'   
        ]);

        \DB::table('city')->insert([
            'state_id' => '2',
            'name' => 'Rajkot'   
        ]);

        \DB::table('city')->insert([
            'state_id' => '2',
            'name' => 'Rajkot'   
        ]);

        \DB::table('city')->insert([
            'state_id' => '3',
            'name' => 'Airdrie'   
        ]);

        \DB::table('city')->insert([
            'state_id' => '4',
            'name' => 'Burnaby'   
        ]);
    }
}
