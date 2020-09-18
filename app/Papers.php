<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Papers extends Model
    {
        protected $table = 'papers';

        public function folder()
        {
            return $this->belongsTo(Folder::class);
        }

        public function block()
        {
            return $this->belongsTo(Block::class);
        }

        public function archive()
        {
            return $this->belongsTo(Archive::class);
        }
    }
