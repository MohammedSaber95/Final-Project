<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
'description' =>$faker->sentence(5),
'image1'=>$faker->imageUrl(480,640),
'image2'=>$faker->imageUrl(480,640),
'image3'=>$faker->imageUrl(480,640),
'price'=>$faker->numberBetween(1,10),
'color'=>$faker->hexcolor ,
'user_id'=>$faker->numberBetween(1,10),
'category_id'=>$faker->numberBetween(1,7),
'cart_id'=>$faker->numberBetween(1,10),
    ];
});
