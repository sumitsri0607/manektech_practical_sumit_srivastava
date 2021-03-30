<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('state')->insert([
            'country_id' => '1',
            'name' => 'Uttar Pradesh'   
        ]);

        \DB::table('state')->insert([
            'country_id' => '1',
            'name' => 'Gujrat'   
        ]);

        \DB::table('state')->insert([
            'country_id' => '2',
            'name' => 'Alberta'   
        ]);

        \DB::table('state')->insert([
            'country_id' => '2',
            'name' => 'British Columbia'   
        ]);
    }
}
