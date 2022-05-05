<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        
        DB::table('products')->insert([
            'name' => "Cadeira",
            'description' => "Cadeira bonita, charmosa",
            'price' => 100.5,
            'image' => "public/images/1.jpeg",
            'user_id' => 0,
        ]);

        DB::table('products')->insert([
            'name' => "Poltrona",
            'description' => "É uma poltrona azul muito confortável!",
            'price' => 200,
            'image' => "public/images/2.jpeg",
            'user_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Escrivaninha",
            'description' => "Ótimo lugar para trabalhar e estudar!",
            'price' => 150.25,
            'image' => "public/images/3.jpeg",
            'user_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Cadeira Gamer",
            'description' => "Não é confortável nem ergonômica, mas é gamer.",
            'price' => 999,
            'image' => "public/images/4.jpeg",
            'user_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Mesa de jantar",
            'description' => "Inclui 2 cadeiras também",
            'price' => 800,
            'image' => "public/images/5.jpeg",
            'user_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Sofá",
            'description' => "Confortável, macio e em ótimo estado!",
            'price' => 425.50,
            'image' => "public/images/6.jpeg",
            'user_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Armário",
            'description' => "Esse armário é muito resistente, pois ele é feito com uma madeira reforçada.",
            'price' => 235,
            'image' => "public/images/7.jpeg",
            'user_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Escrivaninha minmalista",
            'description' => "Não ocupa tanto espaço do seu quarto",
            'price' => 90,
            'image' => "public/images/8.jpeg",
            'user_id' => 3,
        ]);
    }
}
