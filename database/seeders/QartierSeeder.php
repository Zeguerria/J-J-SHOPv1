<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QartierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('qartiers')->insert([
            ['id'=>1, 'nom'=>"Nkembo", 'parametre_id'=>6],
            ['id'=>2, 'nom'=>"Louis", 'parametre_id'=>6],
            // 'tarif_id'
        ]);
    }
}
