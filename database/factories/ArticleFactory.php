<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'author_id' => $faker -> numberBetween(1,10),
        'title' => str_random(20),

    ];
});
