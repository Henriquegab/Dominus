<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('conteudo');
            $table->string('imagem');
            $table->unsignedBigInteger('cardapio_id');
            $table->timestamps();
        });

        Schema::table('pratos', function (Blueprint $table) {

            $table->foreign('cardapio_id')->references('id')->on('cardapios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('pratos', function (Blueprint $table) {



            $table->dropForeign('pratos_cardapio_id_foreign');

        });

        Schema::dropIfExists('pratos');
    }
}
