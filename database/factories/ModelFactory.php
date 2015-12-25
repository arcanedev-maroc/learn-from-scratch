<?php

/* ------------------------------------------------------------------------------------------------
 |  Model Factories
 | ------------------------------------------------------------------------------------------------
 */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Topic::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'body'  => $faker->paragraph(),
    ];
});
