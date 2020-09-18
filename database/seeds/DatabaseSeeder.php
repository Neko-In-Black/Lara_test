<?php

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
            // $this->call(UsersTableSeeder::class);
//            factory(Archive::class, 10)->create();
//            factory(Block::class, 30)->create();
//            factory(Folder::class, 100)->create();

        factory(App\Archive::class, 5)->create()->each(function($arch) {
            $arch->blocks()->saveMany(factory(App\Block::class, 5)->make());
        });

//            $archiveIds =
//                factory(App\Archive::class, 5)
//                    ->create()
//                    ->pluck('id')
//                    ->toArray();
//            $blockIds =
//                factory(App\Block::class, 5)
//                    ->create()
//                    ->pluck('id')
//                    ->toArray();

//            factory(Papers::class, 120)->create();
//            $this->call([
//                FolderBlockSeeder::class,
//            ]);
        }
    }
