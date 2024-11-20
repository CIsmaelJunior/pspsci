<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Créer un administrateur
        User::create([
            'username' => 'admin',
            'nom' => 'Admin',
            'prenoms' => 'Super',
            'date_naissance' => '1990-01-01',
            'addresse' => '123 Rue Admin',
            'poste' => 'Administrateur',
            'type' => 'admin',
            'email' => 'admin@pspsci.org',
            'password' => Hash::make('admin123'),
        ]);
    }
}
