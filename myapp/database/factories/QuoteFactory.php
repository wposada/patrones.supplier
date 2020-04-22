<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Quote;
use Faker\Generator as Faker;

$factory->define(Quote::class, function (Faker $faker) {
    return [
        //
         'cliente' => $faker->company,
         'email' => $faker->unique()->safeEmail,
         'telefono' => $faker->phoneNumber,
         'producto' => $faker->word,
         'cantidad' => $faker->randomDigit
    ];
});
