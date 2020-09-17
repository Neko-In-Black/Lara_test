<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\Archive;
    use Faker\Generator as Faker;

    $factory->define(Archive::class, function (Faker $faker) {
        $time = $faker->dateTimeBetween('-30 days', '-1 days');
        return [
            'created_at' => $time,
            'updated_at' => $time,
        ];
    });
