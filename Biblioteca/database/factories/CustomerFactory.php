<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'document' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'phone' => $faker->phoneNumber,

    ];
});
