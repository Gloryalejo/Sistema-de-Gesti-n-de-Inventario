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
        //Tabla usuarios
        Schema::create('users', function (Blueprint $table) {
            $table->id();// Identificador único para cada usuario en la tabla.
            $table->string('name');// Nombre del usuario
            $table->string('last_name');// Apellido del usuario
            $table->bigInteger('role_id')->unsigned();// Identificador único en la tabla de "roles" que especifica el tipo de rol asignado a un usuario.
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade'); // Constraint del foreign key de role_id
            $table->string('email')->unique();// Almacena la dirección de correo electrónico, una forma común de comunicación y registro en sistemas.
            $table->string('password');// Almacena la clave elegida por el usuario, encriptada para garantizar que solo el usuario pueda acceder a su contenido.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
