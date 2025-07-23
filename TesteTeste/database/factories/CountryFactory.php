<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'deleted_at' => $faker->dateTime,
    ];
});
