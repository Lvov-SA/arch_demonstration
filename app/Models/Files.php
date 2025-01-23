<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Files extends Model
{
    public function parent(): MorphTo
    {
        return $this->morphTo();
    }
}
