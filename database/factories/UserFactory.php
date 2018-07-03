<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "last_name" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => str_random(10),
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
        "dob" => $faker->date("d/m/Y", $max = 'now'),
        "gender" => collect(["male","female",])->random(),
        "phone_number" => $faker->randomNumber(2),
        "company_name" => $faker->name,
    ];
});
