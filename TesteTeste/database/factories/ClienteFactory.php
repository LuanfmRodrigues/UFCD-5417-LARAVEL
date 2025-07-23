<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use App\Country;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'country_id' => Country::pluck('id')->random(),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birth_date' => $faker->dateTime(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
        'deleted_at' => $faker->dateTime(),

    ];
});
