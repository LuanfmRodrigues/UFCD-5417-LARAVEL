<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function produtos()
    {
        return $this->hasMany(Produtos::class);
    }
}
