<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for ($i=0; $i < 7; $i++) {
            Post::create([
                'author_id' => mt_rand(1, 5),
                'title' => $faker->sentence(),
                'description' => $faker->sentence(),
                'detail' => $faker->paragraph(),
                'category_id' => mt_rand(1, 3),
                'image' => $faker->imageUrl(800, 480, 'animals', true)
            ]);
        }
    }
}
