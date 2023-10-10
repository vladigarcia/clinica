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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('direccion', 100);
            $table->string('telefono', 8);
            $table->int('edad');
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('genero_id');
            $table->date('fecha_a');
            $table->timestamps();

            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
