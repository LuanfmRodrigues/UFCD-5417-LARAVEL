<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Funcionario;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cargo' => $faker->randomElement(['Pizzaiolo', 'Entregador', 'Atendente']),
        'telefone' => $faker->phoneNumber,
    ];
});
