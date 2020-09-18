<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Block extends Model
    {
        protected $table = 'blocks';

        public function archive()
        {
            return $this->belongsTo(Archive::class);
        }

        public function folders() {
            return $this->hasmany(Folder::class);
        }
        public function papers() {
            return $this->hasmany(Papers::class);
        }

    }
