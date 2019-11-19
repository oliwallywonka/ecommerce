<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Travel;
use Faker\Generator as Faker;

$factory->define(Travel::class, function (Faker $faker) {
    return [
        'destity' => $faker->country,
        'food_cost' => $faker->randomFloat(2,1,2),
        'ticket_cost' => $faker->randomFloat(2,1,4),
        'others' => $faker->randomFloat(2,1,5),
        'description' => $faker->paragraph
    ];
});
