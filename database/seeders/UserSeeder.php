<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            ['id'=>1, 'name'=> "Okawe", 'prenom'=>"Jeremy", 'email'=>"supadmin0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/stockages/users/rtoqbpt1kgSc2JL8ZdRytwvVmDArelxsHMjo8uAZ.jpg','supprimer'=>0,'pseudo'=>'Zeguerria','phone'=>'074663830','profil_id'=>3,'quartier'=>'Nzeng-Ayong'],
            ['id'=>2, 'name'=> "Mamadou", 'prenom'=>"Awal", 'email'=>"client0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>null,'supprimer'=>0,'pseudo'=>'Shadow','phone'=>'066297321','profil_id'=>1,'quartier'=>'Louis'],
            ['id'=>3, 'name'=> "Madison", 'prenom'=>"Wendy", 'email'=>"client01@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/stockages/images/clients/PjzFfc9tPNEYB265RwQYb4ZJByUfDT2dKjEf746k.jpg','supprimer'=>0,'pseudo'=>'SK-Jin','phone'=>'074663830','profil_id'=>1,'quartier'=>'IAI'],
            // ['id'=>3, 'name'=> "Renata", 'prenom'=>"Black", 'email'=>"vendeur0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/kR87zjngHWumgkDbLiXHt10IyU1WUCE6nYOcHZjj.jpg','supprimer'=>0,'pseudo'=>'Just I Black','phone'=>'066297301','profil_id'=>2,'quartier'=>'Kembo'],
            // ['id'=>4, 'name'=> "Beckman", 'prenom'=>"Ben", 'email'=>"client01@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/1Yd0k7wpa2iStlhiBHeuzoGBRK7RSVwcw0PRPBSl.jpg','supprimer'=>0,'pseudo'=>'Benito','phone'=>'066497301','profil_id'=>1,'quartier'=>'Awendje'],
            // ['id'=>2, 'name'=> "Jarvan", 'prenom'=>"IV", 'email'=>"livreur0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/xEm417WtMdXm2M9j0D4jRUznkDLqSAo2frG3EUg3.avif','supprimer'=>0,'pseudo'=>'JvaIV','role_id'=>21,'profil_id'=>3],
            // ['id'=>3, 'name'=> "Ossibadjo", 'prenom'=>"Oceane", 'email'=>"operateur0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/303UFy11EkXFZi2NHIeQgCkNrrdUvRpg3O85R4zc.avif','supprimer'=>0,'pseudo'=>'Océane','role_id'=>10,'profil_id'=>4],
            // ['id'=>4, 'name'=> "Lee", 'prenom'=>"Xin", 'email'=>"livreur1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/NYMDxMMIViYMvFwgH3PdSTgOqDDbohRufYL56qDP.jpg','supprimer'=>0,'pseudo'=>'Draken','role_id'=>21,'profil_id'=>3],
            // ['id'=>5, 'name'=> "Mendoza", 'prenom'=>"Evelinn", 'email'=>"operateur1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/yIQTguBeaSPOU314zc789ygPfucG8M59vk0D3Hgu.jpg','supprimer'=>0,'pseudo'=>'Dominica','role_id'=>10,'profil_id'=>4],
            // ['id'=>6, 'name'=> "Pisci", 'prenom'=>"Dino", 'email'=>"admin0@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/5NNFtDj653pfjqusuV7IW4CJEqq6lDDJxy3xH5uI.jpg','supprimer'=>0,'pseudo'=>'Tepei','role_id'=>7,'profil_id'=>5],
            // ['id'=>7, 'name'=> "Dona", 'prenom'=>"Senna", 'email'=>"admin1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/iqPZjaO0aJTbYN3mTuXYLzPfGDCkAwn0OUyn2xeF.jpg','supprimer'=>0,'pseudo'=>'La Dona','role_id'=>7,'profil_id'=>5],
            // ['id'=>8, 'name'=> "Renata", 'prenom'=>"Black", 'email'=>"supadmin1@gmail.com", 'password'=> '$2y$10$C7wtcd4uzArwo.daeHcHZu7ARErDIXZdcNY2gjgKVz5grMGDq1VWa','photo'=>'public/images/users/fNqYDezslg2mHwAAs4T5BSWMNGBlAMgFpc1E5zPj.jpg','supprimer'=>0,'pseudo'=>'Eye','role_id'=>9,'profil_id'=>6],

        ]);
    }
}
