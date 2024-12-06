<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attribut extends Model
{
    public $timestamps = false;

    function italianos() : HasMany {
        return $this->hasMany(Italiano::class);
    }
}
