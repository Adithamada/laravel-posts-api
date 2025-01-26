<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['category_name' => 'Technology'],
            ['category_name' => 'Health'],
            ['category_name' => 'Sports'],
            ['category_name' => 'Entertainment'],
        ]);
    }
}
