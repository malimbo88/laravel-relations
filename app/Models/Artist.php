<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable [
      "name",
      "birthyear",
      "profession",
    ];

    // Methods
    // Albums method
    // relation with Album class model
    public function albums() {
      return $this->belongsToMany("App\Models\Album");
    }
}
