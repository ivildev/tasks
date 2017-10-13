<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {

    return [
        'name' => $faker->sentence(5,true),
        'type' => $faker->randomElement($array = array ('onetime', 'repetitive')),
        'frequency' => $faker->randomElement($array = array ('daily','weekly','monthly','yearly')),
        'duration' => $faker->randomNumber(1),
        'showDateRangeFrom' => $faker->date('2017-10-01','2018-01-01'),
        'showDateRangeTo' => $faker->date('2017-10-10','2018-01-01'),
        'status' => $faker->randomElement($array = array ('started', 'completed'))
    ];

});
