<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(3),
        'date' => $faker->dateTime('now'),
    ];
});

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
