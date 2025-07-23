<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function instructor()
    {
        return $this->belongTo(Instructor::class);
    }

    public function student()
    {
        return $this->belongToMany(Student::class,'enrollments');
    }

    public function enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }
}
