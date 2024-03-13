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
        Schema::create('inventory_logs', function (Blueprint $table) {
            $table->id();//lave primaria única para cada registro de la tabla
            $table->bigInteger('inventory_id')->unsigned();//Identificador único del inventario al que se vincula este registro de registro.
            $table->foreign('inventory_id')->references('id')->on('inventories')->onUpdate('cascade'); //Nueva restricción de clave foránea para 'inventory_id'
            $table->timestamps();//Marcas de tiempo para rastrear la fecha de creación y última actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_logs');
    }
};
