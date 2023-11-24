<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallaTable extends Migration
{
   
    public function up()
    {
        Schema::create('fallas', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned();
            $table->string('descripcion');
            $table->unsignedMediumInteger('prioridad_id');
            $table->unsignedMediumInteger('user_id');
            $table->timestamps();
            //llaves foraneas
            $table->foreign('prioridad_id')->references('id')->on('prioridades');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('fallas');
    }
}
