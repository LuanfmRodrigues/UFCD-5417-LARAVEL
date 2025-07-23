<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses()
    {
        return $this->belongsToMany(Instructor::class,'enrollments');
    }
    public function enrollments()
    {
        return $this->hasMany( Enrollment::class);
    }
}
