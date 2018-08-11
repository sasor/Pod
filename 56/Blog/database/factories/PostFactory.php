<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1, 30), // indica que debemos crear 30 users
        'category_id' => rand(1, 20), // indica que debemos crear 20 categories
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(200),
        'body' => $faker->text(500),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
