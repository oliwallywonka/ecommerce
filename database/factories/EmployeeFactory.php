<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'users_id' => \App\User::all()->random()->id,
        'ci' => $faker->postcode,
        'gender' => $faker->randomElement(['MASCULINO','FEMENINO'])
    ];
});
