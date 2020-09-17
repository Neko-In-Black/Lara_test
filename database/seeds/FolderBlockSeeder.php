<?php

    use App\Block;
    use App\Folder;
    use Illuminate\Database\Seeder;

    class FolderBlockSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $folderIds = Folder::pluck('id')
                               ->toArray();
            $blockIds = Block::pluck('id')
                             ->toArray();

            $data = [];
            for ($i = 0; $i < 20; $i++) {
                $arr['folders_id'] = Arr::random($folderIds);
                $arr['blocks_id'] = Arr::random($blockIds);
                $data[] = $arr;
            }

            DB::table('folder_block')
              ->insert($data);
        }
    }
