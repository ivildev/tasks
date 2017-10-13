<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement($array = array('started', 'in progress', 'completed'))

    ];
});
