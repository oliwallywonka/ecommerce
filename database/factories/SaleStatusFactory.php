<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SaleStatus;
use Faker\Generator as Faker;

$factory->define(SaleStatus::class, function (Faker $faker) {
    return [
        'sale_status' => $faker->randomElement(['COMPRADO','EN ALMACEN','ENVIANDO'])

    ];
});
