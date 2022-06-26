<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
            ['countryname' => 'Indonesia', 'slug' => 'id',],
            ['countryname' => 'Malaysia', 'slug' => 'ml',],
            ['countryname' => 'Singapore', 'slug' => 'sg',],
            ['countryname' => 'China', 'slug' => 'ch',],
            ['countryname' => 'Japan', 'slug' => 'jp',],
            ['countryname' => 'South Korea', 'slug' => 'kr',],
        ]);

    }

    
}
