<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function books(){
        return $this->hasMany(book::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}

