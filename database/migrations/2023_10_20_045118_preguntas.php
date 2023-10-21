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
        Schema::create('preguntas',function(Blueprint $table){
            $table->id('id');
            $table->string('pregunta',255);
            $table->string('descripcion',255);
            $table->boolean('activo')->default(true);
            $table->foreignId('categoria_id');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categoria_encuesta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};
