<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'color' => $faker->colorName,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'person_id' => $faker->numberBetween($min = 1, $max = 400),

    ];
});
