<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToldosTable extends Migration
{
    public function up()
    {
        Schema::create('toldos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('ancho', 10, 2);
            $table->decimal('largo', 10, 2);
            $table->integer('piezas');
            $table->decimal('lona_m2', 10, 2);
            $table->boolean('luces')->default(false);
            $table->boolean('conexiones')->default(false);
            $table->integer('mesas')->default(0);
            $table->integer('sillas')->default(0);
            $table->integer('tarimas')->default(0);
            $table->string('color')->nullable();
            $table->boolean('cortinas')->default(false);
            $table->text('decoracion_extra')->nullable();
            $table->enum('status', ['disponible', 'no_disponible'])->default('disponible');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('toldos');
    }
}