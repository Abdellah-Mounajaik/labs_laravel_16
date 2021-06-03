<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeequipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homeequipes')->insert([
            [
                "image"=> "img/team/1.jpg",
                "nom"=> "Christine Williams",
                "poste_id" => 2,
            ],
            [
                "image"=> "img/team/2.jpg",
                "nom"=> "Christine Williams",
                "poste_id" => 1,
            ],
            [
                "image"=> "img/team/3.jpg",
                "nom"=> "Christine Williams",
                "poste_id" => 3,
            ],
        ]);
    }
}
