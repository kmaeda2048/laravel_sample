<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => Str::random(20),
        'body' => Str::random(80),
        // 'title' => $faker->title,
        // 'body' => $faker->paragraph,
        // 'user_id' => factory(App\User::class),
    ];
});
