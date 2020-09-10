<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_genre', function (Blueprint $table) {
          // Relations to Artists table
          $table->unsignedBigInteger("genre_id");
          $table->foreign("genre_id")
                ->references("id")
                ->on("genres");

          // Relations to Albums table
          $table->unsignedBigInteger("album_id");
          $table->foreign("album_id")
                ->references("id")
                ->on("albums");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_genre');
    }
}
