<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorias;
use App\Clientes;

class Produtos extends Model
{
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }
}
