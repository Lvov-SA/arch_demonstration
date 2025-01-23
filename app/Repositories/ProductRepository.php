<?php

namespace App\Repositories;

use App\Models\Product;
use App\Piplines\ProductPipeline;

class ProductRepository
{
    /**
     * @param array $filterArray
     * @return mixed
     */
    public function index(array $filterArray): mixed
    {
        $pipeline = new ProductPipeline($filterArray);
        $result = $pipeline->apply(Product::query())->paginate();

        return $result;
    }

    /**
     * @param array $productArray
     * @return array
     */
    public function store(array $productArray): array
    {
        $newRecordId = Product::query()->insertGetId($productArray);
        $result = Product::query()->find($newRecordId)->toArray();

        return $result;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): array
    {
        $result = Product::query()->find($id)->toArray();

        return $result;
    }

    /**
     * @param array $productArray
     * @return array
     */
    public function update(array $productArray): array
    {
        Product::query()
            ->where('id', $productArray['id'])
            ->update($productArray);
        $result = Product::query()->find($productArray['id'])->toArray();

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): void
    {
        $result = Product::query()->find($id)->delete();
    }
}
