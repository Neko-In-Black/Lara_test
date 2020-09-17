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
            Schema::enableForeignKeyConstraints();
            Schema::create('folders', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->collation = 'utf8mb4_unicode_ci';
                $table->bigIncrements('id');
                $table->timestamps();
                $table->bigInteger('archives_id')
                      ->unsigned();
                $table->bigInteger('blocks_id')
                      ->unsigned();

                $table->foreign('archives_id')
                      ->references('id')
                      ->on('archives');
                $table->foreign('blocks_id')
                      ->references('id')
                      ->on('blocks');
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
