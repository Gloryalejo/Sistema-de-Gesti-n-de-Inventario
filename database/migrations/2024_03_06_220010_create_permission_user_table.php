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
        //Tabla de permisos para cada usuario
        Schema::create('permission_user', function (Blueprint $table) {
            $table->id();// Identificador único
            $table->bigInteger('permission_id')->unsigned();// Identificador del permiso a relacionar con el usuario.
            $table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('cascade'); // Constraint de la llave foránea permission_id
            $table->bigInteger('user_id')->unsigned();// ID del usuario relacionado
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade'); // Constraint de la llave foránea user_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_user');
    }
};
