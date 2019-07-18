<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'phone' => $faker->phoneNumber,
            'email' => $faker->safeEmail,
            'city' => $faker->city,
    ];
});
