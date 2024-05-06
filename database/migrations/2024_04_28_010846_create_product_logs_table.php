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
        Schema::create('product_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('action'); // Acción realizada (created, updated, deleted, etc.)
            $table->text('details')->nullable(); // Detalles adicionales de la acción
            $table->unsignedBigInteger('user_id')->nullable(); // ID del usuario que realizó la acción
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps(); // Fecha de creación y modificación del registro en la bitácora
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_logs');
    }
};
