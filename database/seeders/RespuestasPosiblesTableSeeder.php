<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasPosiblesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('respuestasposibles')->insert([
            [
                'respuesa' => 'Padre',
                'pregunta_id' => 14,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Madre',
                'pregunta_id' => 14,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Hermano/a',
                'pregunta_id' => 14,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Otro',
                'pregunta_id' => 14,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Si',
                'pregunta_id' => 16,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No',
                'pregunta_id' => 16,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'De 21 a 40 horas a la semana',
                'pregunta_id' => 17,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'De 10 a 20 horas a la semana',
                'pregunta_id' => 17,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Menos de 10 horas a la semana',
                'pregunta_id' => 17,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No aplica',
                'pregunta_id' => 17,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Días laborables (L- S)',
                'pregunta_id' => 20,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Días Habiles (L - V)',
                'pregunta_id' => 20,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Fin de Semana',
                'pregunta_id' => 20,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Toda la Semana',
                'pregunta_id' => 20,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Solo Laboro 3 días',
                'pregunta_id' => 20,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Solo Laboro 4 Días',
                'pregunta_id' => 20,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No aplica',
                'pregunta_id' => 20,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Si',
                'pregunta_id' => 21,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No',
                'pregunta_id' => 21,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Si',
                'pregunta_id' => 22,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No',
                'pregunta_id' => 22,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Si',
                'pregunta_id' => 24,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No',
                'pregunta_id' => 24,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Publica',
                'pregunta_id' => 26,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Privada',
                'pregunta_id' => 26,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Escolarizada',
                'pregunta_id' => 27,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Abierta',
                'pregunta_id' => 27,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Sin Estudios',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Primaria - Completa',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Primaria - Incompleta',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Secundaria - Completa',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Secundaria - Incompleta',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Bachillerato - Completo',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Bachillerato - Incompleto',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Estudios tecnicos - Completo',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Estudios Tecnicos - Incompleto',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Licenciatura - Completa',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Licenciatura - Incompleta',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Posgrado',
                'pregunta_id' => 29,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Sin Estudios',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Primaria - Completa',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Primaria - Incompleta',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Secundaria - Completa',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Secundaria - Incompleta',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Bachillerato - Completo',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Bachillerato - Incompleto',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Estudios tecnicos - Completo',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Estudios Tecnicos - Incompleto',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Licenciatura - Completa',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Licenciatura - Incompleta',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Posgrado',
                'pregunta_id' => 30,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Orientación Vocacional',
                'pregunta_id' => 31,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'conversasiones con conocidos',
                'pregunta_id' => 31,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Información Obtenida por la institución',
                'pregunta_id' => 31,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Por Vocacion',
                'pregunta_id' => 31,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Por gusto Personal',
                'pregunta_id' => 31,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Si',
                'pregunta_id' => 32,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No',
                'pregunta_id' => 32,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Si',
                'pregunta_id' => 33,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No',
                'pregunta_id' => 33,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Si',
                'pregunta_id' => 34,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No',
                'pregunta_id' => 34,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Desde un principio lo planee',
                'pregunta_id' => 35,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Me di cuenta que no era mi vocacion',
                'pregunta_id' => 35,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'No me gusto el ambiente',
                'pregunta_id' => 35,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Por mejores perspectivas futuras de empleo',
                'pregunta_id' => 35,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Por mal Desempeño',
                'pregunta_id' => 35,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Otro',
                'pregunta_id' => 35,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Bibliografia del programa',
                'pregunta_id' => 36,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Bibliografia buscada por mi cuenta',
                'pregunta_id' => 36,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Revistas especializadas',
                'pregunta_id' => 36,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Enciclopedias',
                'pregunta_id' => 36,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Diccionarios',
                'pregunta_id' => 36,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Libros de Texto',
                'pregunta_id' => 36,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Paginas Web',
                'pregunta_id' => 36,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Mas de 20 Horas',
                'pregunta_id' => 37,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'de 16 a 20 horas',
                'pregunta_id' => 37,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'De 11 a 15 horas',
                'pregunta_id' => 37,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'De 6 a 10 horas',
                'pregunta_id' => 37,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'De 1 a 5 horas',
                'pregunta_id' => 37,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Menos de una hora',
                'pregunta_id' => 37,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'En una institucion educativa',
                'pregunta_id' => 38,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'En el Sector Publico',
                'pregunta_id' => 38,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'En una empresa privada',
                'pregunta_id' => 38,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'En el nogocio de la familia',
                'pregunta_id' => 38,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'En mi negocio propio',
                'pregunta_id' => 38,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],
            [
                'respuesa' => 'Ejercicio libre de la profesion',
                'pregunta_id' => 38,
                'created_at' => date('Y-m:d H:i:s'),
                'updated_at' => date('Y-m:d H:i:s'),
            ],        
        ]);
    }
}
