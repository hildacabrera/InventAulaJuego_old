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
        Schema::create('prestamo', function (Blueprint $table) {
            $table->id();
            $table->integer('cant_prestamo');
            $table->date('fecha_pres');
            $table->date('fecha_dev');
            $table->string('descripcion');
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
        Schema::dropIfExists('prestamo');
    }
};
