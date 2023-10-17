<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clinicas', function (Blueprint $table) {
            $table->id('cod_clinica');
            $table->string('nombre');
            $table->int('telefono');
            $table->strin('direccion');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('clinicas');
    }
};
