<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenPublicacionEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publicacion_eventos', function (Blueprint $table) {
            $table->integer('tipo_eventos_id')->unsigned();
            $table->index('tipo_eventos_id');
            $table->foreign('tipo_eventos_id')->references('id')->on('tipo_eventos')->ondelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicacion_eventos', function (Blueprint $table) {
            //
        });
    }
}
