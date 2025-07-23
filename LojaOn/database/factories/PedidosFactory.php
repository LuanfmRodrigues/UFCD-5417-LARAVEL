<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pedidos;
use App\Clientes;
use Faker\Generator as Faker;

$factory->define(Pedidos::class, function (Faker $faker) {
    $status = ['pendente', 'processando', 'concluido', 'cancelado'];
    return [
        'cliente_id' => \App\Clientes::pluck('id')->random(),
        'status' => $faker->randomElement($status),
        'valor_total' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
