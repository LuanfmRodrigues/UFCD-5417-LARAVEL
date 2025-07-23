<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Brand;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand_id'=>$faker->numberBetween(1,5),
        'registration' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'year_of_manufacture' => $faker->numberBetween(1990, 2025),
        'color' => $faker->colorName,
        'created_at' => now(),
        'updated_at' => now()

    ];
});
