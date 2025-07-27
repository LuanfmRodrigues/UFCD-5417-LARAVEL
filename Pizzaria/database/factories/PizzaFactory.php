<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->word . ' Pizza',
        'preco_P' => $faker->randomFloat(2, 20, 40),
        'preco_M' => $faker->randomFloat(2, 40.01, 60),
        'preco_G' => $faker->randomFloat(2, 60.01, 90),
    ];
});
