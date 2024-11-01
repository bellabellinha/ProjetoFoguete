<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id(); // ID único para cada registro
            $table->string('nome_equipe'); // Nome da equipe
            $table->float('distancia_percorrida'); // Distância percorrida
            $table->integer('quantidade_vinagre'); // Quantidade de vinagre
            $table->integer('quantidade_bicarbonato'); // Quantidade de bicarbonato
            $table->timestamps(); // Campos de timestamp (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
