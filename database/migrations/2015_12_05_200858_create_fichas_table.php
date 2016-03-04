<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {

            $table->increments('id_ficha');
            $table->integer('id_ingreso');
            $table->integer('id_diagnostico');
            $table->integer('nro_historia');
            $table->char('ci_prefijo', 1);
            $table->integer('ci');
            $table->datetime('fecha_Ingreso');
            $table->datetime('fecha_registro');
            $table->string('nombre', 200);
            $table->string('apellido', 200);
            $table->string('ubicaion_fisica', 200);
            $table->string('Observaciones', 200 );
            $table->string('creado_por', 100 );
            $table->datetime('creado_fecha');
            $table->string('modificado_por', 100 );
            $table->datetime('modificado_fecha');

            $table->primary('id_ficha');

            $table->integer('id_ingreso')->unsigned();
            $table->foreign('id_ingreso')->references('id_ingreso')->on('ingresos');

            $table->integer('id_diagnostico')->unsigned();
            $table->foreign('id_diagnostico')->references('id_diagnostico')->on('diagnosticos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fichas');
    }
}
