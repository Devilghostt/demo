<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForenHorarioCapacitacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horario_capacitacions', function (Blueprint $table) {
            $table->integer('horarios_id')->unsigned();
            $table->index('horarios_id');
            $table->foreign('horarios_id')->references('id')->on('horarios')->ondelete('cascade');

            $table->integer('capacitacions_id')->unsigned();
            $table->index('capacitacions_id');
            $table->foreign('capacitacions_id')->references('id')->on('capacitacions')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horario_capacitacions', function (Blueprint $table) {
            //
        });
    }
}
