<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produtos;
use App\Clientes;
use App\Categorias;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Produtos::class, function (Faker $faker) {
    $nomeProduto = $faker->sentence(3);
    return [
        'nome' => $nomeProduto,
        'descricao' => $faker->text($maxNbChars = 200),
        'preco' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'slug' => Str::slug($nomeProduto),
        'imagem' => $faker->imageUrl($width = 640, $height = 480, ),
        'cliente_id' => Clientes::pluck('id')->random(),
        'categoria_id' => Categorias::pluck('id')->random(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
