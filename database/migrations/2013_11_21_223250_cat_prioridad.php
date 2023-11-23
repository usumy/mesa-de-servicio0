<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatPrioridad extends Migration
{
    public function up()
    {
        Schema::create('prioridades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('prioridades');
    }
}
