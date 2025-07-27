<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public function loans(){
        return $this->hasMany(loan::class);
    }
}
