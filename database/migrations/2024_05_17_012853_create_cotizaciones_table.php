<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->decimal('largo', 10, 2);
            $table->decimal('ancho', 10, 2);
            $table->string('tipo');
            $table->integer('cantidad_personas');
            $table->boolean('luces')->default(false);
            $table->boolean('conexiones')->default(false);
            $table->integer('mesas')->default(0);
            $table->integer('sillas')->default(0);
            $table->integer('tarimas')->default(0);
            $table->string('color')->nullable();
            $table->boolean('cortinas')->default(false);
            $table->text('decoracion_extra')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->text('lugar');
            $table->text('notas_extras')->nullable();
            $table->enum('status', ['pendiente', 'aprobada', 'rechazada'])->default('pendiente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cotizaciones');
    }
}
