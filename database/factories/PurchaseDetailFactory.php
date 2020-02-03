<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PurchaseDetail;
use Faker\Generator as Faker;

$factory->define(PurchaseDetail::class, function (Faker $faker) {
    return [
        'purchase_id' => \App\Purchase::all()->random()->id,
        'clothe_id' => \App\Clothe::all()->random()->id,
        'purchase_price' => $faker->randomFloat(2,1,4),
        'quantity' => 10
    ];
});
