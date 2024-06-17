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
        Schema::create('liders', function (Blueprint $table) {
            $table->id();
            $table->integer('miembro_id')->unsigned()->unique();
            $table->foreign('miembro_id')->references('id')->on('miembros')->onDelete('cascode');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liders');
    }
};
