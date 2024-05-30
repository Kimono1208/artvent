<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('toldos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('medidas');
            $table->string('color');
            $table->unsignedBigInteger('imagen_id')->nullable();
            $table->integer('estatus')->nullable();
            $table->timestamps();

            $table->foreign("imagen_id")->references('id')->on('imagenes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toldos');
    }
};
