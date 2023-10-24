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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('matricula')->nullable();
            $table->string('name');
            $table->string('apPaterno',255)->nullable();
            $table->string('apMaterno',255)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('activo')->default(true);
            $table->foreignId('sede_id')->default(1);
            $table->foreignId('rol_id')->default(3);
            $table->foreignId('carrera_id')->default(1);
            $table->foreignId('sexo_id')->default(1);
            $table->foreignId('genero_id')->default(1);
            $table->binary('fotoPerfil')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('users');
    }
};
