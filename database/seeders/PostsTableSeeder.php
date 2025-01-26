<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categories = Category::pluck('id')->toArray();

        foreach (range(1, 500) as $index) {
            Post::create([
                'title'       => $faker->sentence,
                'description' => $faker->paragraph,
                'category_id' => $faker->randomElement($categories), // Random category ID
                'author'      => $faker->name,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
