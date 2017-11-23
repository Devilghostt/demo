<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion_eventos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('fechaPublicacion');
            $table->date('fechaInicioPublicacion');
            $table->time('horaInicionPublicacion');
            $table->date('fechaFinalPublicacion');
            $table->time('horaFinalPublicacion');
            $table->char('descripcion');
            $table->date('fechaEvento');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->integer('totalAsistencia');
            $table->char('imagenPublicacion');
            $table->char('nombrePublicacion');
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
        Schema::dropIfExists('publicacion_eventos');
    }
}
