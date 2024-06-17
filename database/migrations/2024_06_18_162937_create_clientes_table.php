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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nombre');
            $table->string('rfc');
            $table->string('phone');
            $table->string('direccion')->nullable();
            $table->unsignedBigInteger('imagen_id')->nullable();
            $table->string('email')->nullable();
            $table->string('estatus')->nullable();
            $table->string('adeudo')->nullable();
            // $table->unsignedBigInteger('imagen_id')->nullable();
            $table->timestamps();

            $table->foreign("imagen_id")->references('id')->on('imagenes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
