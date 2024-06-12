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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_actividad', 255);
            $table->text('descripcion');
            $table->date('fecha_inicia_actividad');
            $table->date('fecha_termino_actividad');
            $table->time('hora_inicio_actividad');
            $table->time('hora_termino_actividad');
            $table->string('lugar', 255);
            $table->string('responsable', 255);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
