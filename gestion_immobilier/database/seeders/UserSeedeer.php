<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            // [
            //     'nom' => 'khady',
            //     'prenom' => 'Ba',
            //     'email' => 'utilisateur@example.com',
            //     'password' =>('yoyo124578'),
            //     'Role'=>'admin',
            // ],
            [
                'nom' => 'Mamadou',
                'prenom' => 'Ba',
                'email' => 'email@example.com',
                'password' =>('124578'),
                'Role'=>'admin',
            ]
        ]);
    }
}