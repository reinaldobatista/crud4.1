<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentacaoCaixa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacaoCaixa', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('caixa_id');
            $table->foreign('caixa_id')->references('id')->on('caixa')->onDelete('restrict')->onUpdate('cascade');
            $table->double('value',10,2);
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('movimentacaoCaixa');
    }
}
