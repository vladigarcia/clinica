<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clinicas', function (Blueprint $table) {
            $table->id('cod_clinica', 10);
            $table->string('nombre', 100);
            $table->string('telefono', 8);
            $table->string('direccion', 100);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('clinicas');
    }
};
