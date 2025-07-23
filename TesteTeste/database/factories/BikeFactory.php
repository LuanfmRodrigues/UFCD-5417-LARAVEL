<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bike;
use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Bike::class, function (Faker $faker) {
    return [

        'brand' => $faker->company,
        'model' => $faker->randomElement(),
        'color' => $faker->colorName,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),


    ];
});
