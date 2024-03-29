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
            $table->string('acronimo');
            $table->text('descripcion', 255)->nullable();
            $table->foreignId('sede_id')->default(1);
            $table->timestamps();

            $table->foreign('sede_id')->references('id')->on('sedes');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
