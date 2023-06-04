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
        Schema::create('ingreso_material', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->date('fecha_ingreso');
            $table->string('responsable');
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('material');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingreso_material');
    }
};
