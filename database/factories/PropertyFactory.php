<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Property::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => rand(500, 600),
        'bedroom' => rand(1,4), 
        'bathroom' => rand(1,4), 
        'storey' => rand(1,4), 
        'garage' => rand(1,4), 
        'created_at' => Carbon\Carbon::now(), 
        'updated_at' => Carbon\Carbon::now()
    ];
});