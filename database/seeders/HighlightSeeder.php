<?php

namespace Database\Seeders;

use App\Models\Highlight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Highlight::create([
            'post_id' => '1'
        ]);
    }
}
