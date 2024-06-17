<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiezasTable extends Migration
{
    public function up()
    {
        Schema::create('piezas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cantidad');
            $table->decimal('ancho', 10, 2);
            $table->decimal('largo', 10, 2);
            $table->boolean('unicas')->default(false);
            $table->text('observaciones')->nullable();
            $table->enum('status', ['disponible', 'no_disponible'])->default('disponible');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('piezas');
    }
}