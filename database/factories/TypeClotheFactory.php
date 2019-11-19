<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TypeClothe;
use Faker\Generator as Faker;

$factory->define(TypeClothe::class, function (Faker $faker) {
    return [
        'type' => $faker->word
    ];
});
