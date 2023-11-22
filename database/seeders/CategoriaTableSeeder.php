<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categoria_encuesta')->insert([
            [
                'categoria' => 'Datos Generales',
                'descripcion' => 'Esta categoria corresponde a los datos generales del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'categoria' => 'Contacto',
                'descripcion' => 'Esta categoria corresponde a los datos de contacto del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'categoria' => 'Contacto de Emergencia',
                'descripcion' => 'Esta categoria corresponde a los datos de contacto de emergencia del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'categoria' => 'Aspectos Socioeconomicos',
                'descripcion' => 'Esta categoria corresponde a los aspectos socioeconomicos del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'categoria' => 'Salud',
                'descripcion' => 'Esta categoria corresponde a los datos de salud del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'categoria' => 'Rendimiento Escolar',
                'descripcion' => 'Esta categoria corresponde a los datos generales del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'categoria' => 'Habitos de Estudio y Practicas Escolares',
                'descripcion' => 'Esta categoria corresponde a los datos generales del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'categoria' => 'Expectativas Educativas y Ocupacionales',
                'descripcion' => 'Esta categoria corresponde a los datos generales del alumno',
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
        ]);
    }
}
