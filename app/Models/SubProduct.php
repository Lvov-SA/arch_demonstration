<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class SubProduct extends Model
{
    protected $fillable =[
        'name',
        'product_id'
    ];
    public function files(): MorphMany
    {
        return $this->morphMany(Files::class, 'parent');
    }
}
