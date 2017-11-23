<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenUsuarioPublicacionEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario_publicacion_eventos', function (Blueprint $table) {
            $table->integer('users_id')->unsigned();
            $table->index('users_id');
            $table->foreign('users_id')->references('id')->on('users')->ondelete('cascade');

            $table->integer('publicacion_eventos_id')->unsigned();
            $table->index('publicacion_eventos_id');
            $table->foreign('publicacion_eventos_id')->references('id')->on('publicacion_eventos')->ondelete('cascade');

            $table->integer('tipo_respuesta_eventos_id')->unsigned();
            $table->index('tipo_respuesta_eventos_id');
            $table->foreign('tipo_respuesta_eventos_id')->references('id')->on('tipo_respuesta_eventos')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_publicacion_eventos', function (Blueprint $table) {
            //
        });
    }
}
