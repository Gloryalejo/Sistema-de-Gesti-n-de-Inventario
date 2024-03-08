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
        //Tabla de proveedores
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id(); // Identificador único de proveedor
            $table->string('name'); // Nombre del proveedor
            $table->string('address');// Dirección física del proveedor
            $table->string('phone');// Número de teléfono del proveedor
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
