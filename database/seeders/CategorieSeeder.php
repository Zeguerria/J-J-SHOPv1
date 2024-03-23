<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            ['id'=>1, 'nom'=> "AUCUN",'affiche'=>0, 'description'=>"AUCUN", 'photo'=>'public/stockages/images/categories/byomfh4BdzrpKtcJor01vavTOYqWdbR6Lzk0uQZO.jpg'],
            ['id'=>2, 'nom'=> "Beauté",'affiche'=>1, 'description'=>"Découvrez nous ensmble de produits pour la gente feminine", 'photo'=>'public/stockages/images/categories/GeYQO2OPjECFKvr3JgmItQoP9ESGshyUGYwdp3Ml.png'],
            ['id'=>3, 'nom'=> "Massage",'affiche'=>1, 'description'=>"Découvez et profitez au max de nos produits de massage mais surtout faites plaisir à votre corps", 'photo'=>'public/stockages/images/categories/25k1V62QFiqqd2YSihjPXtk4io7l5RziOOTH01nj.png'],
            ['id'=>4, 'nom'=> "Optique",'affiche'=>1, 'description'=>"Mettez votre coté style, miope en valeur avec nos produits optique", 'photo'=>'public/stockages/images/categories/8qdIM4VMTPQAmVselo7dvMqVbRdv1HPJ3QG3bE62.png'],
            ['id'=>5, 'nom'=> "Chapeau",'affiche'=>1, 'description'=>"Mettez votre coté style en consultant notre ensemble de Chapeaux pur trouver celui qui vous corresnd le mieux", 'photo'=>'public/stockages/images/categories/GZCqq6x55O0b2sFeNBEoVBy7Q633VGmk2SdK2bLF.png'],
        ]);
    }
}
