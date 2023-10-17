<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('telefono', 8);
            $table->unsignedBigInteger('cod_clinica');
            $table->timestamps();

            $table->foreign('cod_clinica')->references('id')->on('clinica');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
