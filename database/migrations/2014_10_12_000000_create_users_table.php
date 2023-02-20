<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. (crear tabla)
     */
    public function up(): void
    {

        /* 
        Se usa el método create de la clase schema. El primer argumento es el 
        nombre de la tabla y el segundo una función anonima, que recibe
        como parametro un objeto Blueprint, que se usa para crear columnas de la tabla

        */ 

        Schema::create('users', function (Blueprint $table) {
            $table->id(); //numero entero incremental
            $table->string('name'); //varchar de nombre name, segundo parametro tamaño
            //para mayor cantidad, usar el método text();

            $table->string('email')->unique(); //varchar unico
            $table->timestamp('email_verified_at')->nullable(); //fechas y nullable opcional
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken(); //token de sesión
            $table->timestamps(); //2 columnas  created_at (nuevo registro  y update_at (actualización registro)
        });
    }

    /**
     * Reverse the migrations.
     * Borrar tabla
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
