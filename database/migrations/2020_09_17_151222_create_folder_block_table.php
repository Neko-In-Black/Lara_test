<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateFolderBlockTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('folder_block', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_unicode_ci';
                $table->bigIncrements('id');

                $table->unsignedBigInteger('blocks_id');
                $table->unsignedBigInteger('folders_id');

                $table->foreign('blocks_id')
                      ->references('id')
                      ->on('blocks')->onDelete('cascade');
                $table->foreign('folders_id')
                      ->references('id')
                      ->on('folders')->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('folder_block');
        }
    }
