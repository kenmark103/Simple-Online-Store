<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\admins;
use Faker\Generator as Faker;

$factory->define(Admins::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('secret'), // password
        'remember_token' => Str::random(10),
    ];
});
