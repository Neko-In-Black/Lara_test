<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\{
        Folder,
        Papers
    };
    use Faker\Generator as Faker;

    $factory->define(Papers::class, function (Faker $faker) {
        return [
            'content'    => $faker->realText(rand(20, 60)),
            'folders_id' => function () {
                return factory(Folder::class)->create()->id;
            },
        ];
    });
