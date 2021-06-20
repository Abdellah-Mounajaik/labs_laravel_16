<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            [
                "auteur" => "gokuuuu ",
                "email" => "gokuu@gmail.be",
                "message" => "premier commentaire",
                "article_id" => 1,
                "validate" => 1,
                "created_at" => now(),
            ],
            [
                "auteur" => "narutoooo ",
                "email" => "narutooo@gmail.be",
                "message" => "deuxieme commentaire",
                "article_id" => 1,
                "validate" => 1,
                "created_at" => now(),
            ]
        ]);
    }
}
