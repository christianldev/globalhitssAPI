<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('departamentos')->insert([
            ['codigo' => 'DEP01', 'nombre' => 'Recursos Humanos', 'activo' => true, 'idUsuarioCreacion' => 1],
            ['codigo' => 'DEP02', 'nombre' => 'TI', 'activo' => true, 'idUsuarioCreacion' => 1],
        ]);
    }
}
