<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaTable extends Migration
{
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->id();
            $table->string('nomb_trabajador');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('falla_id');
            $table->text('descripcion');
            $table->timestamps();
            $table->foreign('falla_id')->references('id')->on('fallas');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('salidas');
    }
}
