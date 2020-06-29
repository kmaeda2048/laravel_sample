<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Task::class, function (Faker $faker) {
    return [
        // 'user_id' => mt_rand(1, 50), // テスト用のユーザーはとりあえず50人つくるという前提
        'title' => Str::random(20),
        'body' => Str::random(80),
        // 'user_id' => factory(App\User::class), // Userも同時につくる
        // 'title' => $faker->title,
        // 'body' => $faker->paragraph,
    ];
});
