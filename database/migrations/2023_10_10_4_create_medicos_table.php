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
            $table->bigInteger('telefono');
            $table->unsignedBigInteger('clinica_id');
            $table->timestamps();

            $table->foreign('clinica_id')->references('id')->on('clinicas');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
