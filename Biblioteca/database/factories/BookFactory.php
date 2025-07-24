<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'year_published' => $faker->dateTime(),
        'author_id' => $faker->numberBetween($min = 1, $max = 20),
        'publisher_id' => $faker->numberBetween($min = 1, $max = 20),



    ];
});
