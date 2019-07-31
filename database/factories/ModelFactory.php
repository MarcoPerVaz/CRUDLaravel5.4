<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(CRUDLaravel54\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// CRUDLaravel5.4
    $factory->define(CRUDLaravel54\Product::class, function (Faker\Generator $faker) {
        static $password;

        return [
            'name' => $faker->sentence(2),
            'short' => $faker->text(140),
            'body' => $faker->text(900),
        ];
    });
// 
