<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'users_id' => \App\User::all()->random()->id,
        'street' => $faker->streetName,
        'door_number' => $faker->buildingNumber
    ];
});
