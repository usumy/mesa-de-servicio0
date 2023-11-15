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
            $table->string('prioridad');
            $table->string('departamento');
            $table->string('nombreemple');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('fallas');
    }
}

