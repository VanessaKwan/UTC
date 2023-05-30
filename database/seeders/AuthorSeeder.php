<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AuthorSeeder extends Seeder
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

    for ($i=0; $i < 5; $i++) {
        Author::create([
            'name' => $faker->name(),
            'readingTime' => mt_rand(1, 5)
        ]);
    }
    }
}
