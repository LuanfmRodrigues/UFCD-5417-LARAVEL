<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    public function student()
    {
        return $this->belongTo(Student::class);
    }
    public function course()
    {
        return $this->belongTo(Course::class);
    }
}
