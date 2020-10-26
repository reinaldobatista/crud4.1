<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePedidovenda1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedido_venda', function (Blueprint $table) {
            $table->date('data_finalizacao')->nullable();
            $table->date('solicitacao_envio')->nullable();
            $table->string('observ_finalizacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido_venda', function (Blueprint $table){
        });
    }
}
