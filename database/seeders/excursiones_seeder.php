<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class excursiones_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("excursiones")->truncate();

        DB::table("excursiones")->insert([
            "id"=> "1",
            "Ruta"=>"Andratx-Palma",
            "Tiempo"=>"1:30 hrs",
            "Normas"=>"Siempre puntuales",
            "Precio /€" =>"50"
        ]);
        DB::table("excursiones")->insert([
            "id"=> "2",
            "Ruta"=>"Soller-Palma",
            "Tiempo"=>"3:30 hrs",
            "Normas"=>"Siempre puntuales",
            "Precio /€" =>"30"
        ]);

        DB::table("excursiones")->insert([
            "id"=> "3",
            "Ruta"=>"Mamalu-Palma",
            "Tiempo"=>"45 min",
            "Normas"=>"Siempre puntuales",
            "Precio /€" =>"20"
        ]);


        
    }
}
