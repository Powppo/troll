<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            ['cityname' => 'Malang', 'slug' => 'mlg',],
            ['cityname' => 'Kuala Lumpur', 'slug' => 'kl',],
            ['cityname' => 'Singapore', 'slug' => 'sg',],
            ['cityname' => 'Beijing', 'slug' => 'bj',],
            ['cityname' => 'Tokyo', 'slug' => 'tk',],
            ['cityname' => 'Seoul', 'slug' => 'sl',],
        ]);
    }
}
