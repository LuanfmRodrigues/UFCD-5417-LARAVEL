<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Crud;
use Faker\Generator as Faker;

/**
 *  3º passo - prestar atenção na criação da factory tem que estat na mesma ordem da migration
 *      Lembra de fazer php artisan migrate:fresh --seed
 *      no controller colocar o caminho da pasta e a ordem da tabela
 *      vai no web.php e ver as route de todos os controller's
 */
$factory->define(Crud::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'description' => $faker->paragraph(50),
        'retired' => $faker->boolean,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});


