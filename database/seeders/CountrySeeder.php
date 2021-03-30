<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('country')->insert([
            'name' => 'India'   
        ]);
        
        \DB::table('country')->insert([
            'name' => 'Canada'   
        ]);
    }
}
