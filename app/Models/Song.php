<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
      "title",
      "genre",
      "duration",
      "album_id",
    ];

    // Methods
    // Songs method
    // relation with Album class model
    public function album() {
      return $this->belongsTo("App\Models\Album");
    }
}
