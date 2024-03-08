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
        //Tabla que almacena los permisos según sus roles.
        Schema::create('permission_role', function (Blueprint $table) {
            $table->id();// Identificador único del rol
            $table->bigInteger('permission_id')->unsigned();// Clave foránea en "permissions" para relacionar y cargar información.
            $table->bigInteger('role_id')->unsigned();// Clave foránea en "roles" para relacionar información.
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade'); // Constraint de la llave foránea role_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_role');
    }
};
