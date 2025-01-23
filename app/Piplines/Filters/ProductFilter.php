<?php

namespace App\Piplines\Filters;

use App\Piplines\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter implements FilterInterface
{
    public function __construct(protected int|null $productId)
    {
    }

    public function apply(Builder $builder, $value): Builder
    {
        if (isset($this->productId)) {
            $builder->where('product_id', $this->productId);
        }
        return $value($builder);
    }
}
