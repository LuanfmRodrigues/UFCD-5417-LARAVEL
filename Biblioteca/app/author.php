<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
