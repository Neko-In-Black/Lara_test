<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\{
        Block,
        Folder
    };
    use Faker\Generator as Faker;

    $factory->define(Folder::class, function (Faker $faker) {
        return [
            'blocks_id' => function () {
                return factory(Block::class)->create()->id;
            },
        ];
    });
