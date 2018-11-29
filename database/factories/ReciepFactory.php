<?php

use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {
    return [
    	'name' => $faker->word(2,false),
		'portion' => $faker->randomDigit,             
		'weather' => $faker->randomDigit,
		'calories' => $faker->randomDigit,
		'description' => $faker->realText(),
		'type' => $faker->randomElement(['Desayuno','Almuerzo','Cena']) ,
		'image' => $faker->imageUrl(400,400)

	];
});
