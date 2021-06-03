<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCarrouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_carrousels')->insert([
            [
                "image" => "img/01.jpg",
                "phrase" => "Get your freebie template now!",
                "created_at" => now(),
            ],
            [
                "image" => "img/02.jpg",
                "phrase" => "Get your freebie template now!",
                "created_at" => now(),
            ],
        ]);
    }
}
