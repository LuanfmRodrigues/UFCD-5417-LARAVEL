<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produtos;
use App\Pedidos;

class Clientes extends Model
{
    public function produtos()
    {
        return $this->hasMany(Produtos::class);

    }
    public function pedidos()
    {
        return $this->hasMany(Pedidos::class);
    }
}
