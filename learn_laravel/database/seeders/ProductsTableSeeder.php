<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 11; $i++)
        DB::table('products')->insert([
            'title' => 'Product '.$i,
            'price' => rand(100, 1500),
            'in_stock' => 1,
            'description' => 'some description',
            'category_id' => rand(1, 3),
        ]);
    }
}
