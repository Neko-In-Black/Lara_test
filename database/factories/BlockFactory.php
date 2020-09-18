<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\{
        Archive,
        Block
    };
    use Faker\Generator as Faker;

    $factory->define(Block::class, function (Faker $faker) {
        return [
            'archives_id' => function () {
                return factory(Archive::class)->create()->id;
            },
        ];
    });
