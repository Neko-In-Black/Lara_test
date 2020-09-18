<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Archive extends Model
    {
        protected $table = 'archives';

        public function blocks()
        {
            return $this->hasMany(Block::class);
        }
    }
