<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */


    use App\Folder;
    use Faker\Generator as Faker;

    $factory->define(Folder::class, function (Faker $faker) {
        return [
            'block_id'   => $faker->numberBetween(1, 30),
            'archive_id' => $faker->numberBetween(1,5)
        ];
    });
