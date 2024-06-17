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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', ['Sociedad de jovenes', 'Sociedad de Damas', 'Sociedad de caballeros']);
            $table->string('descripcion')->nullable();
            $table->integer('lider_id')->unsigned()->nullable();
            $table->foreign('lider_id')->references('id')->on('miembros')->onDelete('cascode');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
