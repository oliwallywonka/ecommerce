<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Like;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'customers_id' => \App\Customer::all()->random()->id,
        'clothes_id' => \App\Clothe::all()->random()->id,
        'like' => $faker->randomElement([true,false])
    ];
});
