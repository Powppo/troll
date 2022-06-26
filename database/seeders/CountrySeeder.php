<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            ['countryname' => 'Indonesia', 'cityname' => 'Jakarta',],
            ['countryname' => 'Malaysia', 'cityname' => 'Kuala Lumpur',],
            ['countryname' => 'Singapore', 'cityname' => 'Singapore',],
            ['countryname' => 'China', 'cityname' => 'Beijing',],
            ['countryname' => 'Japan', 'cityname' => 'Tokyo',],
            ['countryname' => 'South Korea', 'cityname' => 'Seoul',],
        ]);

        // DB::table('country')->insert($country);
    }
}
