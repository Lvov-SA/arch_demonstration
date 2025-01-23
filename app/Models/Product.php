<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    public function subProduct(): HasOne
    {
        return $this->hasOne(SubProduct::class);
    }

    public function files(): MorphMany
    {
        return $this->morphMany(Files::class, 'parent');
    }
}
