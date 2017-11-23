<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenNovedads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('novedads', function (Blueprint $table) {
            $table->integer('tipo_novedads_id')->unsigned();
            $table->index('tipo_novedads_id');
            $table->foreign('tipo_novedads_id')->references('id')->on('tipo_novedads')->ondelete('cascade');
            $table->integer('transaccions_id')->unsigned();
            $table->index('transaccions_id');
            $table->foreign('transaccions_id')->references('id')->on('transaccions')->ondelte('casacde');
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
        Schema::table('novedads', function (Blueprint $table) {
            //
        });
    }
}
