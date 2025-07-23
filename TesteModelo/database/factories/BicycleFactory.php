<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [

        'brand'  => $faker->company,
        'model'  => $faker->randomElement(),
        'color'  => $faker->colorName,
        'price'  => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),

    ];
});
