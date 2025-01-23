<?php

namespace App\Piplines\Filters;

use App\Piplines\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter implements FilterInterface
{
    public function __construct(protected int|null $productId)
    {
    }

    public function apply(Builder $builder): Builder
    {
//        if (isset($this->productId)) {
//            return $builder->where('product_id', $this->productId);
//        }
        echo 'fuck u2';
        return $builder;
    }
}
