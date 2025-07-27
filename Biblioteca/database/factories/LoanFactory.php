<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Loan;
use Faker\Generator as Faker;

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'book_id' => rand(1, 20),
        'customer_id' => rand(1, 50),
        'loan_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'return_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
