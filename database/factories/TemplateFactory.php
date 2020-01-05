<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Template;
use Faker\Generator as Faker;

$factory->define(Template::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
        , 'excerpt' => $faker->sentence
        , 'template' => $faker->paragraph
    ];
});
