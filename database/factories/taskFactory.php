<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\task;
use Faker\Generator as Faker;

$factory->define(task::class, function (Faker $faker) {
    return [
        'task1'=> $faker->word(),
        'task2' => $faker->word(),
    ];
});
