<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenTransaccionHasArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaccion_has_articulos', function (Blueprint $table) {
            $table->integer('transaccions_id')->unsigned();
            $table->index('transaccions_id');
            $table->foreign('transaccions_id')->references('id')->on('transaccions')->ondelete('casacde');
            $table->integer('articulos_id')->unsigned();
            $table->index('articulos_id');
            $table->foreign('articulos_id')->references('id')->on('articulos')->ondelete('cascade');
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
        Schema::table('transaccion_has_articulos', function (Blueprint $table) {
            //
        });
    }
}
