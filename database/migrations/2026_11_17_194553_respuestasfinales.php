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
        Schema::create('respuestasfinales',function(Blueprint $table){
            $table->id('id');
            $table->string('respuesta',255)->nullable();
            $table->foreignId('pregunta_id');
            $table->foreignId('respuesta_id')->nullable();
            $table->foreignId('usuario_id');
            $table->boolean('contestada')->default(0);
            $table->timestamps();

            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->foreign('respuesta_id')->references('id')->on('respuestasPosibles');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestasfinales');
    }
};
