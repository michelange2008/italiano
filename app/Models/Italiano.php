<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Italiano extends Model
{
    function attribut() : BelongsTo {
        return $this->belongsTo(Attribut::class);
    }

    function francais() : BelongsToMany {
        return $this->belongsToMany(Francais::class);
    }

    function tags() : BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
