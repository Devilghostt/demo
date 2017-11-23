<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenInscripcions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscripcions', function (Blueprint $table) {
            $table->integer('capacitacions_id')->unsigned();
            $table->index('capacitacions_id');
            $table->foreign('capacitacions_id')->references('id')->on('capacitacions')->ondelete('cascade');

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
        Schema::table('inscripcions', function (Blueprint $table) {
            //
        });
    }
}
