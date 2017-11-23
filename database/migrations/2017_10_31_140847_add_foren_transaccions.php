<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenTransaccions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaccions', function (Blueprint $table) {

            $table->integer('tipo_transaccions_id')->unsigned();
            $table->index('tipo_transaccions_id');
            $table->foreign('tipo_transaccions_id')->references('id')->on('tipo_transaccions')->ondelete('cascade');

            $table->integer('estado_transaccions_id')->unsigned();
            $table->index('estado_transaccions_id');
            $table->foreign('estado_transaccions_id')->references('id')->on('estado_transaccions')->ondelete('cascade');

            $table->integer('users_id')->unsigned();
            $table->index('users_id');
            $table->foreign('users_id')->references('id')->on('users')->ondelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaccions', function (Blueprint $table) {
            //
        });
    }
}
