<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacaoProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_produtos', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('pedido_id');
            $table->foreign('pedido_id')->references('id')->on('pedido_venda')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('qtd');
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
        Schema::dropIfExists('solicitacao_produtos');
    }
}
