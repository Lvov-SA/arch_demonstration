<?php

namespace App\Piplines\Filters;

use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    public function apply(Builder $builder, $value): Builder;
}
