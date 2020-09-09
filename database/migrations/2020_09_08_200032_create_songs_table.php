<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
          // Preset id
          $table->id();

          // Title
          $table->string("title");

          // Genre
          $table->string("genre");

          // Duration
          $table->float("duration", 5, 2);

          // Foreign key Album_id
          $table->unsignedBigInteger("album_id");
          $table->foreign("album_id")
                ->references("id")
                ->on("albums");

          // Preset created_at and updated_at
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
