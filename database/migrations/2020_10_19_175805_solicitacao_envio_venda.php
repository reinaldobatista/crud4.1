<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SolicitacaoEnvioVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Solicitacao_Envio_Venda', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('pedido_id');
            $table->Integer('qtd');
            $table->foreign('pedido_id')->references('id')->on('pedido_venda')->onDelete('restrict')->onUpdate('cascade');
            $table->date('data_saida')->nullable();
            $table->unsignedInteger('story_id');
            $table->foreign('story_id')->references('id')->on('story')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('Solicitacao_Envio_Venda');
    }
}
