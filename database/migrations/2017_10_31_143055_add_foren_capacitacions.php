<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenCapacitacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capacitacions', function (Blueprint $table) {
            $table->integer('tipo_capacitacions_id')->unsigned();
            $table->index('tipo_capacitacions_id');
            $table->foreign('tipo_capacitacions_id')->references('id')->on('tipo_capacitacions')->ondelete('cascade');

            $table->integer('estado_capacitacions_id')->unsigned();
            $table->index('estado_capacitacions_id');
            $table->foreign('estado_capacitacions_id')->references('id')->on('estado_capacitacions')->ondelete('cascade');

            $table->integer('users_id')->unsigned();
            $table->index('users_id');
            $table->foreign('users_id')->references('id')->on('users')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('capacitacions', function (Blueprint $table) {
            //
        });
    }
}
