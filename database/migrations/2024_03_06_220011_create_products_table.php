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
        Schema::create('products', function (Blueprint $table) {
            $table->id();//Clave primaria única para cada producto en la tabla
            $table->string('name');//Guarda el nombre de cada producto disponible.
            $table->string('description');//Almacena los detalles más importantes que tiene el producto para que el usuario tenga más información sobre él
            $table->decimal('base_price', 8, 2);//Almacena el precio base del producto antes de aplicar descuentos, impuestos, u otras modificaciones
            $table->decimal('base_cost', 8, 2);//Registra el costo de adquisición o producción necesario para obtener el producto
            $table->bigInteger('category_id')->unsigned();//Es la clave foránea que establecerá la relación con la tabla de categorías.
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade'); //Nueva restricción de clave foránea para 'category_id'

            $table->timestamps();//Marcas de tiempo para rastrear la fecha de creación y última actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
