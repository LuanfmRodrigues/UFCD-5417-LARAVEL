<?php

use App\Clientes;
use App\Categorias;
use App\Pedidos;
use App\Produtos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientesSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ProdutosSeeder::class);
        $this->call(PedidosSeeder::class);
    }
}
