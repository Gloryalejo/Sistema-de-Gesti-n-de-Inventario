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
        //Tabla que almacena los módulos
        Schema::create('modules', function (Blueprint $table) {
            $table->id();// Identificador único
            $table->string('name');// Nombre del módulo
            $table->bigInteger('parent_id')->unsigned();// Identificador del módulo padre, opcionalmente utilizado cuando un módulo es hijo de otro.
            $table->foreign('parent_id')->references('id')->on('modules')->onUpdate('cascade'); // Constraint de la llave foránea parent_id
            $table->timestamps();//Marcas de tiempo para rastrear la fecha de creación y última actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
