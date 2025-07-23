<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    public function cliente()
    {
        return $this->belongsTo(Clientes::class);
    }
}
