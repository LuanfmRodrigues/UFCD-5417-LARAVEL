<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}
