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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('cantidad');
            $table->string('nro_serie')->nullable();
            $table->string('codigo');
            $table->string('ubicacion');
            $table->string('año_ingreso')->nullable();
            $table->string('fecha_actualizacion')->nullable();
            $table->string('adquisicion')->nullable();
            $table->string('estado')->nullable();
            $table->string('codigo_interno')->nullable();

            // relacionando los modelos equipos y users
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('equipos');
    }
};
