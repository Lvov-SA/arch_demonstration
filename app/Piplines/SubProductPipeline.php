<?php

namespace App\Piplines;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Pipeline;

class SubProductPipeline
{
    protected array $filters = [];

    public function __construct(array $filters)
    {
        $this->filters = $filters;
    }

    public function apply(Builder $builder): Builder
    {
        return Pipeline::send($builder)
            ->via('apply')
            ->through($this->filters)
            ->thenReturn();
    }
}
