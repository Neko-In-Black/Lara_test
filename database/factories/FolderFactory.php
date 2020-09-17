<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\Folder;
    use Faker\Generator as Faker;

    $factory->define(Folder::class, function (Faker $faker) {
        return [
            'content' => $faker->realText(rand(20, 60))
        ];
    });
