<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store')->insert([
            'name' => 'GoodFlower',
            'price' => '300'
        ]);

        DB::table('store')->insert([
            'name' => 'BadFlower',
            'price' => '200'
        ]);

        DB::table('store')->insert([
            'name' => 'UglyFlower',
            'price' => '400'
        ]);
    }
}
