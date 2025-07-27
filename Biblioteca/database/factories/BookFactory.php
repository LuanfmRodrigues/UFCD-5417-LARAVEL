<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\book;
use Faker\Generator as Faker;

$factory->define(book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'author_id' => rand(1, 10),
        'publication_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'publisher_id' => rand(1, 5),
    ];
});
