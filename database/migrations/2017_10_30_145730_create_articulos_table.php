<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('codigo');
            $table->integer('cantidad');
            $table->string('nombre');
            $table->string('observaciones');
            $table->string('tamano');
            $table->string('valoraArticulo');
            $table->boolean('estado')->default(true);
            $table->double('PrecioUnitarioAlquiler');
            $table->char('descripcion');
            $table->integer('tipo_articulos_id')->unsigned();
            $table->index('tipo_articulos_id');
            $table->foreign('tipo_articulos_id')->references('id')->on('tipo_articulos')->ondelete('cascade');
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
        Schema::dropIfExists('articulos');
    }
}
