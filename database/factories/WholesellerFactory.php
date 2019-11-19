<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wholeseller;
use Faker\Generator as Faker;

$factory->define(Wholeseller::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'location' =>$faker->sentence,
        'latitude' =>$faker->sentence,
        'longitude' => $faker->sentence
    ];
});
