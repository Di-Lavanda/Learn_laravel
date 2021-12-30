<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO почему то через цикл не работает
        DB::table('product_images')->insert([
            'img' => 'details_1.jpg',
            'product_id' => 1,
        ]);
        DB::table('product_images')->insert([
            'img' => 'details_2.jpg',
            'product_id' => 1,
        ]);
        DB::table('product_images')->insert([
            'img' => 'details_3.jpg',
            'product_id' => 1,
        ]);
        DB::table('product_images')->insert([
            'img' => 'details_4.jpg',
            'product_id' => 1,
        ]);
    }
}
