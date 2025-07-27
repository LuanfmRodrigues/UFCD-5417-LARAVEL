<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function authors(){
        return $this->belongsToMany(author::class);
    }
    public function books()
    {
        return $this->hasMany(book::class);
    }
}
