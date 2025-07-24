<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'book_id' => $faker->numberBetween($min = 1, $max = 20),
        'customer_id' => $faker->numberBetween($min = 1, $max = 20),
        'acquisition_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'return_date' => $faker->date($format = 'Y-m-d', $max = 'now'),

    ];
});
