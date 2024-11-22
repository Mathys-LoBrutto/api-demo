<?php

namespace Database\Seeders;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        Client::factory(50)->create();
        Produit::factory(200)->create();
        Commande::factory(100)->create();
    }
}
