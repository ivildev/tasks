<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array =
            array ("Creating Application", "Marketing Strategy", "Personal Development", "Create Website",))
    ];
});
