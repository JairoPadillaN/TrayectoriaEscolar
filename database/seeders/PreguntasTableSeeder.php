<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('preguntas')->insert([
            [
                'pregunta' => 'Nombre(s)*',
                'categoria_id' => 1,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Apellido Paterno *',
                'categoria_id' => 1,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Apellido Materno*',
                'categoria_id' => 1,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'CURP*',
                'categoria_id' => 1,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'RFC*',
                'categoria_id' => 1,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Telefono Celular',
                'categoria_id' => 2,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Telefono de Casa',
                'categoria_id' => 2,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Correo Electronico Personal',
                'categoria_id' => 2,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Redes Sociales',
                'categoria_id' => 2,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Domicilio de Residencia',
                'categoria_id' => 2,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Nombre del Contacto',
                'categoria_id' => 3,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Apellido Paterno',
                'categoria_id' => 3,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Apellido Materno',
                'categoria_id' => 3,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Parentesco',
                'categoria_id' => 3,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Correo Electronico',
                'categoria_id' => 3,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Trabajas?',
                'categoria_id' => 4,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Cuantas Horas trabajas a la semana?',
                'categoria_id' => 4,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Lugar de Trabajo',
                'categoria_id' => 4,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Domicilio del Trabajo',
                'categoria_id' => 4,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Días de Trabajo',
                'categoria_id' => 4,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Presenta alguna condición medica?',
                'categoria_id' => 5,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Tiene algún padecimiento Cronico?',
                'categoria_id' => 5,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Nombre del padecimiento Cronico',
                'categoria_id' => 5,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Ha es tado alguna vez hospitalizado(a)?',
                'categoria_id' => 5,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Cual fue el motivo?',
                'categoria_id' => 5,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿en que tipo de escuela realizaste tus estudios previos a la educación superior?',
                'categoria_id' => 6,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿en que tipo de escuela realizaste tus estudios previos a la educación superior?',
                'categoria_id' => 6,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'Nombre de la institución de nivel medio Superior',
                'categoria_id' => 6,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Cual fue la escolaridad maxima de su Madre?',
                'categoria_id' => 6,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Cual fue la escolaridad maxima de su Madre?',
                'categoria_id' => 6,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Que factores fueron importatntes para elegir tu carrera?',
                'categoria_id' => 7,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Cursas Alguna Otra Carrera?',
                'categoria_id' => 7,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Cursaste otra carrera antes de entrar a la UTVT?',
                'categoria_id' => 7,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿La carrera que cursaste anteriormente es la misma con la que iniciaste tus estudios?',
                'categoria_id' => 7,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Que factores se dieron para tu cambio de carrera?',
                'categoria_id' => 7,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => '¿Que tipo de lecturas acostumbras a utilizar al cursar tus estudios?',
                'categoria_id' => 8,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'En promedio,¿Cuantas horas dedicas a la semana a la preparación de tus clases y/o trabajos?',
                'categoria_id' => 8,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'pregunta' => 'De acuerdo con la carrera que cursas actualmente, en que espacio laboral pretenderias preferentemente desarrollar tu actividad profesional',
                'categoria_id' => 8,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],

        ]);
    }
}
