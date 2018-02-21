<?php

use Faker\Generator as Faker;
use App\ProductoImagen;

$factory->define(ProductoImagen::class, function (Faker $faker) {
    return [
       	'imagen' => $faker->imageUrl(250, 250),
       	'id_producto' => $faker->numberBetween(1, 100)
    ];
});
