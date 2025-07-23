<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorias;
use Faker\Generator as Faker;

$factory->define(Categorias::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descrição' => $faker->text($maxNbChars = 200),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
