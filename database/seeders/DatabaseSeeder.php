<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(TypeParametreSeeder::class);
        $this->call(ParametreSeeder::class);
        // $this->call(ClientSeeder::class);
        // $this->call(DestinataireSeeder::class);
        $this->call(ProfilSeeder::class);
        $this->call(HabilitationSeeder::class);
        // $this->call(ProfilHabilitationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(ProduitSeeder::class);
        $this->call(TarifSeeder::class);
        $this->call(QartierSeeder::class);
        // $this->call(LivreurSeeder::class);
        // $this->call(VehiculeSeeder::class);
        // $this->call(LivraisonSeeder::class);
    }
}
