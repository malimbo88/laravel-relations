<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  protected $fillable = [
    "title",
    "genre",
    "album_id",
  ];

  // Methods
  // Method relation with Song table
  public function album() {
    return $this->belongsTo("App\Album");
  }
}
