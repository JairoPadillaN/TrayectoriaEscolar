<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sedes',function (Blueprint $table) {
            $table->id('id');
            $table->string('NombreSede');
            $table->text('Direccion');
            $table->binary('FotoSede')->nullable();
            $table->timestamps();
        });

        DB::table('sedes')->insert([
            [
                'NombreSede' => 'Santa Maria Atarasquillo', 
                'Direccion' => 'Carretera del Departamento del D.F. km 7.5, Santa María Atarasquillo Municipio de Lerma C. P. 52044', 
                'FotoSede' => null, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'NombreSede' => 'Capulhuac', 
                'Direccion' => 'Calle s/n, 611 Oriente de, Méx. Colonia: Lomas de San Juan Municipio:Capulhuac de Mirafuentes C. P. 52700', 
                'FotoSede' => null, 
                'created_at' => date('Y-m-d H:i:s'), 
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
