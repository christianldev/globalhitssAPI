<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'usuario' => 'admin',
                'primerNombre' => 'Administrador',
                'segundoNombre' => 'Sistema',
                'primerApellido' => 'Global',
                'segundoApellido' => 'Hitss',
                'idDepartamento' => 1,
                'idCargo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
