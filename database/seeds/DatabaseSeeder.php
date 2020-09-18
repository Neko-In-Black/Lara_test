<?php

    use App\{
        Archive,
        Block,
        Folder,
        Papers
    };
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            factory(Archive::class, 5)->create();
            factory(Block::class, 30)->create();
            factory(Folder::class, 100)->create();
            factory(Papers::class, 200)->create();
        }
    }
