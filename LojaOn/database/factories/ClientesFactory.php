<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clientes;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Clientes::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'senha' => Hash::make('password'),
        'telefone' => $faker->phoneNumber,
        'endereço' => $faker->address,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
