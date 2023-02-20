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
        //table para modificar método que ya existe 
        Schema::table('users', function (Blueprint $table) {
            //método after para saber después de qué columna
            $table->string('avatar')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //metodo table para modificar tabla que ya existe 
        Schema::table('users', function (Blueprint $table) {
            //dropColumn para borrar columnas 
            $table->dropColumn('avatar');
        });
    }
};
