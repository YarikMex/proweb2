<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('puestos')->insert([
            [
                'nombrePuesto' => 'Gerente',
                'tipoPuesto' => 'Administrativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombrePuesto' => 'Desarrollador',
                'tipoPuesto' => 'Técnico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Puedes agregar más datos aquí
        ]);
    }
}
