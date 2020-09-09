<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Use Faker
use Faker\Generator as Faker;

//Use Album class model
use App\Models\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Generate new Songs rows into Database
        for ($i_albums=0; $i_albums < 10; $i_albums++) {
          for ($i_songs=0; $i_songs < rand(6, 20); $i_songs++) {
            $new_song = new Song();
            $new_song->title = $faker->name;
            $new_song->genre =  $faker->randomElement([
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
            ]);
            $new_song->duration = $faker->randomFloat(2, 0, 60);
            $new_song->album_id = $i_albums + 1;

            //Save data
            $new_song->save();
          }
        }
        // end Generate new Songs rows into Database
    }
}
