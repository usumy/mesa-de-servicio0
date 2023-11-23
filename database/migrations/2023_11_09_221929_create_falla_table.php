<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallaTable extends Migration
{
   
    public function up()
    {
        Schema::create('fallas', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->unsignedBigInteger('prioridad_id');
            $table->unsignedBigInteger('departamento_id');
            $table->string('nombreemple');
            $table->timestamps();
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('prioridad_id')->references('id')->on('prioridades');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('fallas');
    }
}
