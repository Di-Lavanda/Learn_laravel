<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'title' => 'Phones ',
            'desc' => 'some description',
            'img' => 'categories.jpg',
            'description' => 'some description',
            'alias'=>'phones',
        ]);
        DB::table('categories')->insert([
            'title' => 'Cameras ',
            'desc' => 'some description',
            'img' => 'categories.jpg',
            'description' => 'some description',
            'alias'=>'cameras',
        ]);
        DB::table('categories')->insert([
            'title' => 'Laptops ',
            'desc' => 'some description',
            'img' => 'categories.jpg',
            'description' => 'some description',
            'alias'=>'laptops',
        ]);
    }
}
