<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaToldosTable extends Migration
{
    public function up()
    {
        Schema::create('galeria_toldos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_toldo');
            $table->string('imagen');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeria_toldos');
    }
}
