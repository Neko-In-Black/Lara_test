<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePapersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('papers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('content');
                $table->unsignedBigInteger('archive_id');
                $table->unsignedBigInteger('block_id');
                $table->unsignedBigInteger('folder_id');
                $table->timestamps();

                $table->foreign('archive_id')
                      ->references('id')
                      ->on('archives')
                      ->onDelete('cascade');
                $table->foreign('block_id')
                      ->references('id')
                      ->on('blocks')
                      ->onDelete('cascade');
                $table->foreign('folder_id')
                      ->references('id')
                      ->on('folders')
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
            Schema::dropIfExists('papers');
        }
    }
