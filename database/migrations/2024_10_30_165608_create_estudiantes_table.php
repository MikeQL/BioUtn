<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombres', length:100);
            $table->string('apellidos', length:100);
            $table->string('ci', length:10)->unique();
            $table->string('celular', length:20);
            $table->string('correo', length:100)->unique();
            $table->string('direccion', length:255);
            $table->string('semestre', length:15);
            $table->string('observaciones', length:255);



            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
