<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;
use App\Models\User;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'judul' => $faker->words(3, true),
        'isi' => $faker->paragraph,
        'gambar' => $faker,
        'kategori' => $faker,
        'is_published' => $faker->boolean(70),
        'id_user' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
