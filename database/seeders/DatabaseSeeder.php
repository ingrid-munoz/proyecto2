<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ClienteSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(IdiomaSeeder::class);
        $this->call(FacturaSeeder::class);
        // ORDEN CORRECTO
        //$this->call(ClienteSeeder::class);
        //$this->call(FacturaSeeder::class);
        //$this->call(EmpleadoSeeder::class);
        //$this->call(IdiomaSeeder::class);
    }
}
