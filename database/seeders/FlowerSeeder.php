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
        DB::table('flowers')->insert([
            'name' => 'GoodFlower',
            'price' => '300'
        ]);

        DB::table('flowers')->insert([
            'name' => 'BadFlower',
            'price' => '200',
            'columns' => 'Asteraceae'
        ]);

        DB::table('flowers')->insert([
            'name' => 'UglyFlower',
            'price' => '400',
            'columns' => 'Asteraceae'
        ]);
    }
}
