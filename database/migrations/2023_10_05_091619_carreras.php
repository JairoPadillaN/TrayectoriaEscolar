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
        Schema::create('carreras', function (Blueprint $table){
            $table->id('id');
            $table->string('carrera');
            $table->text('descripcion', 255)->nullable();
            $table->foreignId('sede_id')->default(1);
            $table->timestamps();

            $table->foreign('sede_id')->references('id')->on('sedes');
        });

        DB::table('carreras')->insert([
            [
                'carrera' => 'Sin Especificar', 
                'descripcion' => null,
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
        Schema::dropIfExists('carreras');
    }
};
