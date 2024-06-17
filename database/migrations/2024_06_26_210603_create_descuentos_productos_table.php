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
        Schema::create('descuentos_productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->float('descuento');
            $table->integer('estatus')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->timestamps();

            $table->foreign("cliente_id")->references('id')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descuentos_productos');
    }
};
