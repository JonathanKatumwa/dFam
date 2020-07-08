<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\clients;
use Faker\Generator as Faker;

$factory->define(clients::class, function (Faker $faker) {

    return [
        'first_Name' => $faker->word,
        'last_Name' => $faker->word,
        'dob' => $faker->word,
        'age' => $faker->randomDigitNotNull,
        'email' => $faker->word,
        'phone_No' => $faker->word,
        'address' => $faker->text,
        'current_address' => $faker->text,
        'nationality' => $faker->word,
        'passport_No' => $faker->word,
        'status' => $faker->word,
        'date_Registered' => $faker->word,
        'image' => $faker->word,
        'role' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
