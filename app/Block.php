<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Block extends Model
    {
        protected $table = 'blocks';

        public function archive()
        {
            return $this->hasOne(Archive::class);
        }
    }
