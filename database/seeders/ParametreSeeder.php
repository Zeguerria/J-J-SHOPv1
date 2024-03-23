<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('parametres')->insert([
            ['id'=>1, 'code'=> "AUCUN", 'libelle'=>"AUCUN", 'description'=>"AUCUN", 'type_parametre_id'=> 1],
            //QUALITE DEBUT
                ['id'=>2, 'code'=> "C-MOYEN", 'libelle'=>"Moyenne", 'description'=>"qualité moyenne", 'type_parametre_id'=> 2],
                ['id'=>3, 'code'=> "C-BONNE", 'libelle'=>"Bonne", 'description'=>"Bonne qualité", 'type_parametre_id'=> 2],
                ['id'=>4, 'code'=> "C-TRES-BONNE", 'libelle'=>"Très bonne", 'description'=>"Très bonne qualité", 'type_parametre_id'=> 2],
                ['id'=>5, 'code'=> "C-EXCELLENTE", 'libelle'=>"Excellente", 'description'=>"Excellente qualité", 'type_parametre_id'=> 2],
                // ['id'=>6, 'code'=> "C-LIVREUR", 'libelle'=>"Livreur", 'description'=>"Livreur", 'type_parametre_id'=> 2],
                // ['id'=>7, 'code'=> "C-Vendeur", 'libelle'=>"Vendeur", 'description'=>"Vendeur", 'type_parametre_id'=> 2],
            //QUALITE FIN
            //COMMUNE DEBUT
                ['id'=>6, 'code'=> "LBV", 'libelle'=>"Libreville", 'description'=>"Commune de Libreville", 'type_parametre_id'=> 3],
                //COMMUNE FIN


        ]);
    }
}
