<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enrollment;
use Faker\Generator as Faker;

$factory->define(Enrollment::class, function (Faker $faker) {
    return [
        'course_id' => rand(1,5),
        'student_id' => rand(1,100),

    ];
});
