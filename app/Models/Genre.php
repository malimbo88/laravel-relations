<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
      "musicgenre"
    ];

    // Methods
    // Albums method
    // relation with Album class model
    public function albums() {
      return $this->belongsToMany("App\Models\Album");
    }
}
