<?php

    use App\{
        Archive,
        Block,
        Folder
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
            factory(Archive::class, 4)->create();
            factory(Block::class, 15)->create();
            factory(Folder::class, 15)->create();
            $this->call([
                FolderBlockSeeder::class,
            ]);
        }
    }
