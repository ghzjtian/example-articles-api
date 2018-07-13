<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [

        'article_id' => $faker -> numberBetween(1,10),
        'author_id' => $faker -> numberBetween(1,10),
        'body' => $faker->text,
    ];
});
