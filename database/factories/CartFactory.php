<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cart;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'price' => $faker -> numberBetween(1,100),
        'quantity' => $faker -> numberBetween(1,10),
    ];
});
