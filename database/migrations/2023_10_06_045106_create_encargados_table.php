<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up(): void
    {
         Schema::create('encargados', function (Blueprint $table) {
            $table->string('rut_encargado', 10)->primary();
            $table->string('nom_encargado');
            $table->string('telefono');
            $table->string('correo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('encargados');
    }
};