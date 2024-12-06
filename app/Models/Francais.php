<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Francais extends Model
{
    function italianos() : BelongsToMany {
        return $this->belongsToMany(Italiano::class);
    }
}
