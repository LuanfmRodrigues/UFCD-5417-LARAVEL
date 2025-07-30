<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use App\Project;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'details' => $faker->text,
        'category_id' => function () {
            return Category::all()->random()->id; },
        'project_id' => function () {
            return Project::all()->random()->id;
        },
    ];
});
