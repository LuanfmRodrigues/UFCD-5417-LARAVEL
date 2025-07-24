<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
