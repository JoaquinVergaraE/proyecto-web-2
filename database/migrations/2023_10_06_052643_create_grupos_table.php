<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('cod_grupo'); 
            $table->string('cod_institucion'); 
            $table->string('rut_encargado'); 
            $table->integer('cantidad_niños');
            $table->integer('cantidad_niñas');
            $table->integer('cantidad_adultos');
            $table->integer('cantidad_adultas');

            $table->foreign('cod_institucion')->references('cod_institucion')->on('instituciones');
            $table->foreign('rut_encargado')->references('rut_encargado')->on('encargados');
        });
    }

    public function down()
    {
        Schema::dropIfExists('grupos');
    }
};

