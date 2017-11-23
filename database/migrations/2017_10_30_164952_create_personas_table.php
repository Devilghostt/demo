<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('primernombre');
            $table->string('segundonombre')->nullable();
            $table->string('primerapellido');
            $table->string('segundoapellido');
            $table->string('direccion');
            $table->string('documento')->unique();
            $table->string('correo')->unique();
            $table->date('fechadenacimiento');
            $table->string('telefono');

            $table->integer('tipo_documentos_id')->unsigned();
            $table->index('tipo_documentos_id');
            $table->foreign('tipo_documentos_id')->references('id')->on('tipo_documentos')->ondelete('cascade');

            $table->integer('generos_id')->unsigned();
            $table->index('generos_id');
            $table->foreign('generos_id')->references('id')->on('generos')->ondelete('cascade');

            $table->integer('users_id')->unsigned();
            $table->index('users_id');
            $table->foreign('users_id')->references('id')->on('users')->ondelete('cascade');

            $table->integer('afiliados_id')->unsigned();
            $table->index('afiliados_id');
            $table->foreign('afiliados_id')->references('id')->on('afiliados')->ondelete('cascade');
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
        Schema::dropIfExists('personas');
    }
}
