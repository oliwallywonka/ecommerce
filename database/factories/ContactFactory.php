<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'contact_type_id' => \App\ContactType::all()->random()->id,
        'wholeseller_id' => \App\Wholeseller::all()->random()->id,
    ];
});
