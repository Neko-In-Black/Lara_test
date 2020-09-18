<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\{
        Papers
    };
    use Faker\Generator as Faker;

    $factory->define(Papers::class, function (Faker $faker) {
        return [
            'content'    => $faker->realText(rand(20, 60)),
            'archive_id' => $faker->numberBetween(1, 5),
            'block_id'   => $faker->numberBetween(1, 30),
            'folder_id'  => $faker->numberBetween(1, 10)
        ];
    });
