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
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 255);
            $table->string('apellidos', 255);
            $table->string('cedula')->unique(11);
            $table->enum('genero', ['M', 'F']);
            $table->date('fecha_nacimiento');
            $table->tinyInteger('edad')->unsigned();
            $table->string('provincia', 100)->default('Distrito Nacional');
            $table->string('direccion',250);
            $table->string('celular1', )->default('celular1');
            $table->string('celular2', )->nullable('celular2');
            $table->string('correo_electronico');
            $table->enum('estado_civil', ['Soltero', 'Casado', 'Viudo', 'Dirvociado'])->default('Soltero');
            $table->date('fecha_conversion')->nullable();
            $table->date('fecha_bautismo')->nullable();
            $table->string('recomendacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
