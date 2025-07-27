<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books(){
        return $this->hasMany(book::class);
    }
    public function publishers(){
        return $this->belongsToMany(publisher::class);
    }
}
