<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'matricula'=>221910005,
                'name'=>'Jairo',
                'apPaterno'=>'Padilla',
                'apMaterno'=>'Nava',
                'email'=>'al221910005@utvtol.edu.mx',
                'password'=>bcrypt('Padilla.1'),
                'rol_id'=>1,
            ],
            [
                'matricula'=>222010696,
                'name'=>'Diego',
                'apPaterno'=>'Garduño',
                'apMaterno'=>'Hernandez',
                'email'=>'al222010696@utvtol.edu.mx',
                'password'=>bcrypt('Garduno.1'),
                'rol_id'=>2,
            ],
            [
                'matricula'=>221911564,
                'name'=>'Alejandro',
                'apPaterno'=>'González',
                'apMaterno'=>'Bolaños',
                'email'=>'al221911564@gmail.com',
                'password'=>bcrypt('Gonzalez.1'),
                'rol_id'=>3,
            ],
        ]);
    }
}
