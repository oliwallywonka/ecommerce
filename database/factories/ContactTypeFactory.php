<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactType;
use Faker\Generator as Faker;

$factory->define(ContactType::class, function (Faker $faker) {
    return [
        'contact_type' => $faker->word
    ];
});
