<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "nom" => "Admin",
                "description" => "je suis une description",
                "image" => "goku.jpg",
                "poste_id" => 1,
                "genre_id" => 1,
                "role_id" => 1,
                "email" => "admin@gmail.com",
                "password" =>  Hash::make('testtest'),
            ]
        ]);
    }
}
