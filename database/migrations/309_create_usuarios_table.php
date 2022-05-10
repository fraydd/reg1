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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nombre_2');
            $table->string('apellido');
            $table->string('apellido_2');
            $table->integer('edad');
            $table->string('foto');
            $table->string('Direccion');
            $table->string('telefono','10');
            $table->integer('cantidad_hijos');
            $table->string('numeroid');

            $table->timestamps();

             $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')
                ->references('id')
                ->on('estados'); 

            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')
                ->references('id')
                ->on('pais'); 

            $table->unsignedBigInteger('identificacion_id');
            $table->foreign('identificacion_id')
                ->references('id')
                ->on('identificacions');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
