<?php

use App\Pedido;
use App\Cliente;
use App\Funcionario;
use App\Bairro;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pedido::class, 100)->create();
    }
}
