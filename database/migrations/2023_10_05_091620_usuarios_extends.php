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
            $table->integer('matricula');
            $table->string('nombre',255);
            $table->string('ap_paterno',255);
            $table->string('ap_materno',255);
            $table->string('sexo');
            $table->binary('foto')->nullable();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->foreignId('sede_id');
            $table->foreignId('rol_id');
            $table->foreignId('carrera_id');

            $table->foreign('sede_id')->references('id')->on('sedes');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->foreign('carrera_id')->references('id')->on('carreras');
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
