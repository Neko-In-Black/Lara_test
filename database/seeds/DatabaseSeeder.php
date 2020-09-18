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
            // $this->call(UsersTableSeeder::class);
            factory(Archive::class, 10)->create();
            factory(Block::class, 30)->create();
            factory(Folder::class, 100)->create();
            factory(Papers::class, 120)->create();
//            $this->call([
//                FolderBlockSeeder::class,
//            ]);
        }
    }
