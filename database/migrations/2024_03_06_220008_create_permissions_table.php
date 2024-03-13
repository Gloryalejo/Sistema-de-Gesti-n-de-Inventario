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
        //Tabla que almacena los permisos y las capacidades del usuario según el id original
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();// Identificador único
            $table->bigInteger('module_id')->unsigned();// Clave foránea en "modules" para relacionar y cargar información de permisos con módulos.
            $table->foreign('module_id')->references('id')->on('modules')->onUpdate('cascade'); // Constraint de la llave foránea module_id
            $table->bigInteger('function_id')->unsigned();// Clave foránea en "functions" para relacionar información de permisos con funciones.
            $table->foreign('function_id')->references('id')->on('functions')->onUpdate('cascade'); // Constraint de la llave foránea module_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
