<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produits')->insert([
            ['id'=>1, 'nom'=> "Crème Nivéa", 'categorie_id'=>2, 'description'=>"Crème hydratante nivéa",'quantite'=>"20",'prix'=>"12000",'solde'=>"8000",'parametre_id'=>3,'favori'=>"1",'photo1'=>"public/stockages/images/produits/Oph1V8RktJd8204PaZ8EKoD2eQKkFDe021tgcOHh.jpg",'photo2'=>"public/stockages/images/produits/zbjaIjoTkr2KSGKfC5B2lws7Hgy5eTB1RXAem9zx.jpg",'vue'=>1],
            ['id'=>2, 'nom'=> "Arome Tentation", 'categorie_id'=>2, 'description'=>"Huile de massage Arome tentation",'quantite'=>"10",'prix'=>"7000",'solde'=>null,'parametre_id'=>4,'favori'=>"1",'photo1'=>"public/stockages/images/produits/9np19mrZegciOhWhzlom5TewlCNLbk5TOdldINl5.jpg",'photo2'=>"public/stockages/images/produits/BtBkiroXyJQxBAyXzCWQuPbY5nog9zajXyBDiJdq.jpg",'vue'=>1],
            // ['id'=>1, 'nom'=> "Crème Nivéa", 'categorie_id'=>2, 'description'=>"Crème hydratante nivéa",'quantite'=>"20",'prix'=>"12000",'solde'=>"8000",'parametre_id'=>3,'favori'=>"1",'photo1'=>"public/stockages/images/produits/Oph1V8RktJd8204PaZ8EKoD2eQKkFDe021tgcOHh.jpg",'photo2'=>"public/stockages/images/produits/zbjaIjoTkr2KSGKfC5B2lws7Hgy5eTB1RXAem9zx.jpg"],
            // ['id'=>2, 'code'=> "P-A", 'libelle'=>"Admin", 'description'=>"Administrateur"],
            // ['id'=>3, 'code'=> "P-SA", 'libelle'=>"SuperAdmin", 'description'=>"Concepteur "],
        ]);
    }
}
