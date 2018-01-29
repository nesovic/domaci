<?php

use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'user_id' =>$faker->numberBetween($min = 1, $max = 46),
        'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'completed' => $faker->randomElements($array = array ('true','false'), $count = 1),
        'due_date' => $faker->dayOfWeek(),
    ];
});
