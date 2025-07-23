<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     * // 1ºPasso - Criar as migration de acordo com que é pedido se houver a necessidade de criar relacoes de tabela
     *      prestar atenção na ligacoes de tabelas com a foreing key. e as ordens do parametros
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->TEXT('description');
            $table->boolean('retired');
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
        Schema::dropIfExists('cruds');
    }
}
