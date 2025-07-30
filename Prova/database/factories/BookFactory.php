<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'pages' => $faker->numberBetween($min = 1, $max = 100),
        'publish_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'author_id' => $faker->numberBetween($min = 1, $max = 10),
        'publisher_id' => $faker->numberBetween($min = 1, $max = 5),

    ];
});
