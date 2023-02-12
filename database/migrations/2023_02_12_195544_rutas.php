<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function(Blueprint $table){
            $table->bigInteger('id_ruta');
            $table->text('inicio_ruta');
            $table->text('fin_ruta');
            $table->text('dificultad');
            $table->date('fecha_evento');
            $table->string('hora_inicio', 50);
            $table->string('estado', 50);
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
        Schema::drop('rutas');
    }
}
