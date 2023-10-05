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
            $table->id('idUserExt');
            $table->integer('matricula');
            $table->string('nombre',255);
            $table->string('apPaterno',255);
            $table->string('apMaterno',255);
            $table->string('sexo');
            $table->binary('fotoPerfil')->nullable();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->foreignId('sedeId');
            $table->foreignId('idRol');
            $table->foreignId('idCarrera');
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
