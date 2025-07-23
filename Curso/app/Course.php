<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function instructor()
    {

    /**
     * Um curso pertence a um instrutor.
     */
        return $this->belongTo(Instructor::class);
    }

    public function students()
    {
        /**
         * Um curso pode ter muitos estudantes matriculados.
         * A tabela intermediária é 'enrollments'.
         */

        return $this->belongToMany(Student::class,'enrollments');
    }

    public function enrollments()
    {
        /**
         * Um curso tem muitas matrículas diretas (registros na tabela 'enrollments').
         */
        return $this->hasMany(Enrollment::class);
    }
}
