<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence(3),
'description' => $faker -> sentence(5),
'status' => $faker->boolean(),
'product_id' => $faker->numberBetween(1,10),
'user_id'=> $faker->numberBetween(1,10),
    ];
});
