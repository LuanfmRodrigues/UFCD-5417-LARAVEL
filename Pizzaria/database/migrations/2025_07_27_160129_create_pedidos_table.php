<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('data_pedido');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('funcionario_aten_id')->constrained('funcionarios');
            $table->foreignId('funcionario_entrega_id')->constrained('funcionarios');
            $table->foreignId('bairro_id')->constrained('bairros');
            $table->decimal('valor', 8, 2);
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
        Schema::dropIfExists('pedidos');
    }
}
