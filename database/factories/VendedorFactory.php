<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vendedor;
use Faker\Generator as Faker;

$factory->define(Vendedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'fone' => random_int(90000000, 99999999)
    ];
});
