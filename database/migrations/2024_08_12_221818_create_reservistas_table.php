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
        Schema::create('reservistas', function (Blueprint $table) {
            $table->id();
            $table->string('Unidad');
            $table->string('Plantilla');
            $table->string('ESTADO_CARGO');
            $table->string('GRADO');
            $table->string('NOMBRE_Y_APELLIDOS');
            $table->string('C_IDENTIDAD');
            $table->string('MUNICIPIO');
            $table->string('DIRECCION');
            $table->string('TELEFONO');
            $table->boolean('Preparado');
            $table->date('Fecha_Preparado');
            $table->string('Recorrido');
            $table->date('Fecha_Recorrido');
            $table->string('Causal');
            $table->text('Observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservistas');
    }
};
