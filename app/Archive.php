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

        public function folders()
        {
            return $this->hasMany(Folder::class);
        }

        public function papers()
        {
            return $this->hasMany(Papers::class);
        }


    }
