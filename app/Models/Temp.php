<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Temp extends Model
{
    
    function conjugaisons() : HasMany {
        return $this->hasMany(Conjugaison::class);
    }
}
