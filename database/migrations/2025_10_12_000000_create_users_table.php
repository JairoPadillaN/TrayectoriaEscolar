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
            $table->timestamps();

            $table->foreign('sede_id')->references('id')->on('sedes');
            $table->foreign('rol_id')->references('id')->on('rolesuser');
            $table->foreign('carrera_id')->references('id')->on('carreras');

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
