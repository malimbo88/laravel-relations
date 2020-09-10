<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Use Genre model class
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
          "pop",
          "rock",
          "contry",
          "jazz",
          "dance",
          "classic",
          "blues",
          "indie",
          "punk",
          "reggae",
          "metal",
          "tribal",
        ];

        foreach ($genres as $genre) {
          $new_genre = new Genre();
          $new_genre->musicgenre = $genre;

          // Save data
          $new_genre->save();
        }
    }
}
