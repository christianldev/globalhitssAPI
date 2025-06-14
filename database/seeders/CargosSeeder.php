<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('cargos')->insert([
            ['codigo' => 'CAR01', 'nombre' => 'Gerente', 'activo' => true, 'idUsuarioCreacion' => 1],
            ['codigo' => 'CAR02', 'nombre' => 'Desarrollador', 'activo' => true, 'idUsuarioCreacion' => 1],
        ]);
    }
}
