<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function publisher(){
        return $this->belongsTo(publisher::class);
    }
    public function author(){
        return $this->belongsTo(author::class);
    }
    public function loan(){
        return $this->belongsTo(loan::class);
    }
}
