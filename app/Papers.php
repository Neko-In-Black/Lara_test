<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Papers extends Model
    {
        protected $table = 'papers';

        public function folder()
        {
            return $this->hasOne(Folder::class);
        }
    }
