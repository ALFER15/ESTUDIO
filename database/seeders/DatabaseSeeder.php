<?php

namespace Database\Seeders;

use App\Models\userPractica;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        userPractica::factory(20)->create(); // Crea 20 registros usando el factory
    }
}
