<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaixa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixa', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->unsignedInteger('banco_id');
            $table->foreign('banco_id')->references('id')->on('banco')->onDelete('restrict')->onUpdate('cascade');
            $table->double('value',10,2);
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
        Schema::dropIfExists('caixa');
    }
}
