<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeParametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('type_parametres')->insert([
            ['id'=>1, 'code'=> "AUCUN", 'libelle'=>"AUCUN", 'description'=>"AUCUN"],
            ['id'=>2, 'code'=> "Q", 'libelle'=>"Les qualités", 'description'=>"l'ensemble de qualité des produits"],
            ['id'=>3, 'code'=> "LC", 'libelle'=>"Les communes", 'description'=>"l'ensemble des communes"],
        ]);
    }
}
