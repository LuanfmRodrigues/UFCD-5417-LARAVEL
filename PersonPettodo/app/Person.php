<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pet;

class Person extends Model
{
    public function pets(){
        return $this->hasMany('Pet');

    }
}
