<?php

namespace Database\Seeders;
use App\Models\Autor;
use App\Models\Libro;
use App\Models\Venta;
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
        $this->call([
            AutorSeeder::class,
            LibroSeeder::class,
            VentaSeeder::class
        ]);
    }
}
