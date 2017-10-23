<?php

use Faker\Generator as Faker;

$factory->define(App\Tema::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'user_id' => function() {
            return factory('App\User')->create()->id;
        }
    ];
});

$factory->define(App\Respuesta::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'user_id' => function() {
            return factory('App\User')->create()->id;
        },
        'tema_id' => function() {
            return factory('App\Tema')->create()->id;
        }
    ];
});
