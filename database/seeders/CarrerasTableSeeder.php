<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('carreras')->insert([
            [
                'carrera' => 'Sin Especificar',
                'acronimo' => 'S/E', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Mantenimiento, Área Industrial',
                'acronimo' => 'MI', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Ing. en Mantenimiento Industrial',
                'acronimo' => 'IMI', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Mecatrónica, Área Sistemas de Manufactura Flexible',
                'acronimo' => 'SMF', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Ing. en Mecatrónica',
                'acronimo' => 'MEC', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Desarrollo de Negocios, Área Mercadotecnia',
                'acronimo' => 'MER', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Desarrollo de Negocios, Área Ventas',
                'acronimo' => 'VEN', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Lic. en Innovación de Negocios y Mercadotecnia',
                'acronimo' => 'LINM', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U.en Tecnologías de la Infomación, Área Infraestructura de Redes Digitales',
                'acronimo' => 'IRD', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U.en Tecnologías de la Infomación, Área Desarrollo de Software Multiplataforma',
                'acronimo' => 'DSM', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Ing. en Redes Inteligentes y ciberseguridad',
                'acronimo' => 'IRIC', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Ing. en Desarrollo y Gestión de Software',
                'acronimo' => 'IDGS', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Procesos Industriales, Área Manufactura',
                'acronimo' => 'MAN', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Ing. en Sistemas Productivos',
                'acronimo' => 'ISP', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Paramédico',
                'acronimo' => 'PAR', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Lic. en Protección Civil y Emergencias',
                'acronimo' => 'LPCE', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Química, Área Tecnología Ambiental',
                'acronimo' => 'TA', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Ing. en Tecnología Ambiental',
                'acronimo' => 'ITA', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'Lic. en Enfermería',
                'acronimo' => 'LE', 
                'descripcion' => null,
                'sede_id' => 1,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Procesos Alimentarios',
                'acronimo' => 'PA', 
                'descripcion' => null,
                'sede_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'ING. Procesos Bioalimentarios',
                'acronimo' => 'IPB', 
                'descripcion' => null,
                'sede_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'T.S.U. en Química, Área Biotecnología',
                'acronimo' => 'BIO', 
                'descripcion' => null,
                'sede_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'carrera' => 'ING. en Biotecnología',
                'acronimo' => 'IB', 
                'descripcion' => null,
                'sede_id' => 2,
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
