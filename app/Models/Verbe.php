<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Verbe extends Model
{
    protected $guarded = [];
    
    function conjugaisons() : HasMany {
        return $this->hasMany(Conjugaison::class);
    }
}
