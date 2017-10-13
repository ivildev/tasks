<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ("Mac/Toni", "Ljube", "SSD", "Prsonal", "Don"))
    ];
});
