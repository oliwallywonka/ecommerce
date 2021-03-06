<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker) {
    return [
        'customer_id' => \App\Customer::all()->random()->id,
        'sale_status_id' => \App\SaleStatus::all()->random()->id,
        'total_sale' => $faker->randomFloat(2,1,4)
    ];
});
