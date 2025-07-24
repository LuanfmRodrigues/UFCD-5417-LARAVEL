<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publisher;
use Faker\Generator as Faker;

$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'document' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'phone' => $faker->phoneNumber,
    ];
});
