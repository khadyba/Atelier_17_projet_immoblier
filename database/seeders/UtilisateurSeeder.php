<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            [
                'nom' => 'khadu',
                'prenom' => 'ba',
                'email' => 'utilisateur@example.com',
                'motdepasse' =>('yoyo124578'),
                'admin'=>0,
            ],
            // Ajoutez d'autres utilisateurs si nécessaire...
        ]);
}
}