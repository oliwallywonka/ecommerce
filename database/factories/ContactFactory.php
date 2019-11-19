<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'contact_types_id' => \App\ContactType::all()->random()->id,
        'wholesellers_id' => \App\Wholeseller::all()->random()->id,
    ];
});
