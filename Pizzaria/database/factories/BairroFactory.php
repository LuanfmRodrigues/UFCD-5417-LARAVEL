<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bairro;
use Faker\Generator as Faker;

$factory->define(Bairro::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'tempo_de_entrega' => $faker->numberBetween(15, 40),
    ];
});
