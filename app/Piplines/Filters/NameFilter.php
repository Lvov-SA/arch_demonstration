<?php

namespace App\Piplines\Filters;

use App\Piplines\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class NameFilter implements FilterInterface
{
    public function __construct(protected string|null $name)
    {
    }

    public function apply(Builder $builder, $value): Builder
    {
        if (isset($this->name)) {
            $builder->where('name', 'like', '%' . $this->name . '%');
        }
        return $value($builder);
    }
}
