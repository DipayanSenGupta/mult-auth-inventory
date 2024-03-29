<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Writer;
use Faker\Generator as Faker;

$factory->define(Writer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Null,
    ];
});
