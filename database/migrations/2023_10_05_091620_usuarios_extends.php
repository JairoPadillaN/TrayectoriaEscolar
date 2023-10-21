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
        Schema::create('usuarios_extends', function (Blueprint $table){
            $table->id('id');
            $table->foreignId('user_id');
            $table->foreignId('sede_id');
            $table->foreignId('rol_id');
            $table->foreignId('carrera_id');
            $table->foreignId('sexo_id');
            $table->foreignId('genero_id');
            $table->binary('fotoPerfil')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sede_id')->references('id')->on('sedes');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('sexo_id')->references('id')->on('sexo');
            $table->foreign('genero_id')->references('id')->on('genero');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_extends');
    }
};
