<?php

namespace App;

//Tem que colocar o use par a relacao;
use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Country extends Model
{
    //relação de um para muitos
    public function clientes(){
        return $this->hasMany('Cliente');

    }
}
