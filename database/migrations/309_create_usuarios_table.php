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
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fechan');
            $table->string('foto');
            $table->string('Direccion')->nullable();
            $table->string('telefono','13')->nullable();
            $table->integer('cantidad_hijos')->nullable();
            $table->string('numeroid');
            $table->string('ciudad')->nullable();
            $table->date('fechaa');


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


            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');

            $table->unsignedBigInteger('occupation_id');
            $table->foreign('occupation_id')
                ->references('id')
                ->on('occupations');

            $table->unsignedBigInteger('sex_id');
            $table->foreign('sex_id')
                ->references('id')
                ->on('sexes');

            $table->unsignedBigInteger('martial_id');
            $table->foreign('martial_id')
                ->references('id')
                ->on('martials');




            
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
