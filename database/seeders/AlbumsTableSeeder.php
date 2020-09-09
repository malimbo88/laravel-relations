<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Use Faker
use Faker\Generator as Faker;

//Use Album class model
use App\Models\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Generate new Album rows into Database
        for ($i=0; $i < 10; $i++) {
          $new_album = new Album();
          $new_album->title = $faker->word;
          $new_album->cover = $faker->imageUrl(800, 600);
          $new_album->artist = $faker->name;
          $new_album->year = $faker->year();
          $new_album->description = $faker->paragraph();

          // Save data
          $new_album->save();
        }
    }
}
