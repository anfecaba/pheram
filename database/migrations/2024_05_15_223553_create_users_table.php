<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void /*Funcion Up es para subir nuestras migraciones a la base de datos*/
    {
        Schema::create('users', function (Blueprint $table) {
            /*Asignamos las tablas a la base de datos mediante la funcion*/ 
            $table->increments('id');
            $table->string('role', 100);
            $table->string('name', 200);
            $table->string('surname', 200);
            $table->string('nick', 200);
            $table->string('email', 200);
            $table->string('password', 100);
            $table->string('image', 255);
            $table->string('remember_token', 255);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop();
    }
};
