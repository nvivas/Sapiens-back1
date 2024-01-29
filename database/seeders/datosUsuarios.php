<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datosUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([  
            'nombre' => 'Nacho',
            'apellidos' => 'Vivas',
            'email' => 'moeshe@gmail.com',
            'dirección' => 'Parque grande 1',
            'codigoPostal' => '50001',
            'contraseña' => '1234'
            ]);
    }
}