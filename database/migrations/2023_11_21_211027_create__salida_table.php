<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaTable extends Migration
{
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned();
            $table->string('descripcion');
            $table->unsignedMediumInteger('user_id');
            $table->unsignedMediumInteger('falla_id');
            $table->timestamps();
            $table->foreign('falla_id')->references('id')->on('fallas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('salidas');
    }
}
