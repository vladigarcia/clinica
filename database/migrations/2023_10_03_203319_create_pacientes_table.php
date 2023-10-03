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
            $table->id('id_paciente');
            $table->varchar('nombre', 50);
            $table->varchar('apellido', 50);
            $table->varchar('direccion', 100);
            $table->int('telefono', 8);
            $table->int('edad');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->date('fecha_a');
            $table->timestamps();
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
