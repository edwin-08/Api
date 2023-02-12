<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suscripciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripciones', function(Blueprint $table){
            $table->bigInteger('id_suscripcion', true);
            $table->date('fecha_registro');
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_ruta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suscripciones');
    }
}
