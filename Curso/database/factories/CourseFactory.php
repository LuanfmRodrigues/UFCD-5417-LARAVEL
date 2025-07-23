<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->paragraph,
        'instructor_id'=> $faker->rand(1,5),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
