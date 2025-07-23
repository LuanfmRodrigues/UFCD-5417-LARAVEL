<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birth_date' => $faker->date(),
        'email' => $faker->unique()->safeEmail,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
