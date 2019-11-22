<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Like;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'customer_id' => \App\Customer::all()->random()->id,
        'clothe_id' => \App\Clothe::all()->random()->id,
        'like' => $faker->randomElement([true,false])
    ];
});
