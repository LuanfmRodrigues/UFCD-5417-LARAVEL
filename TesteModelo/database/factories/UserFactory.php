<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'country_id' => Country::pluck('id')->random(),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birth_date' => $faker->date(),


    ];
});
