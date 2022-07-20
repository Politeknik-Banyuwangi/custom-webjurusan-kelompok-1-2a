<?php

namespace Database\Seeders;

use App\Models\Categori_model;
use Illuminate\Database\Seeder;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categori_model::create([
            'name' =>'Teknologi',
            'slug'  =>'teknologi'
        ]);

        Categori_model::create([
            'name' =>'Program',
            'slug'  =>'program'
        ]);

        Categori_model::create([
            'name' =>'Coding Sintaks',
            'slug'  =>'coding_sintaks'
        ]);
    }
}
