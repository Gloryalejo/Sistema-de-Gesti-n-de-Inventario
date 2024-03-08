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
        //Tabla de registro de roles sin detalles de permisos ni capacidades.
        Schema::create('roles', function (Blueprint $table) {
            $table->id();// Identificador único del rol
            $table->string('name');// Nombre del rol
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
