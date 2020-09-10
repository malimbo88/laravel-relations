<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
      "title",
      "cover",
      "artist",
      "year",
      "description",
    ];

    // Methods
    // Songs method
    // relation with Song class model
    public function songs() {
      return $this->hasMany("App\Models\Song");
    }

    // Artists method
    // relation with Artist class model
    public function genres() {
      return $this->belongsToMany("App\Models\Genre");
    }
}
