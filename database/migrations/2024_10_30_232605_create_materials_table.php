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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', length:100);
            $table->string('volumen', length:100)->nullable();
            $table->string('unidad', length:100)->nullable();
            $table->string('cantidad_total', length:100);
            $table->string('cantidad_uso', length:100)->nullable();
            $table->string('fecha_uso', length:100)->nullable();
            $table->string('fecha_entrega', length:100)->nullable();
            $table->string('observaciones', length:255)->nullable();
            $table->string('laboratorio', length:255)->nullable();


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
        Schema::dropIfExists('materials');
    }
};
