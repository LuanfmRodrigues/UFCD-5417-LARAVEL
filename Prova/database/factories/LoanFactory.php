<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Loan;
use Faker\Generator as Faker;

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'borrower_name' =>  $faker->name,
        'loan_date' =>  $faker->date($format = 'Y-m-d', $max = 'now'),
        'return_date' =>  $faker->date($format = 'Y-m-d', $max = 'now'),
        'book_id' => $faker->numberBetween($min = 1, $max = 20),

    ];
});
