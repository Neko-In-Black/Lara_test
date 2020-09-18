<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateFoldersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('folders', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_unicode_ci';
                $table->bigIncrements('id');
                $table->unsignedBigInteger('block_id');
                $table->unsignedBigInteger('archive_id');
                $table->timestamps();

                $table->foreign('block_id')
                      ->references('id')
                      ->on('blocks')
                      ->onDelete('cascade');
                $table->foreign('archive_id')
                      ->references('id')
                      ->on('archives')
                      ->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('folders');
        }
    }
