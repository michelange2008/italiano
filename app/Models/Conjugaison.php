<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conjugaison extends Model
{
    function verbe() : BelongsTo {
        return $this->belongsTo(Verbe::class);
    }

    function temp() : BelongsTo {
        return $this->belongsTo(Temp::class);
    }
}
