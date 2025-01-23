<?php

namespace App\Services;

use App\Piplines\Filters\NameFilter;
use App\Piplines\Filters\ProductFilter;
use App\Repositories\SubProductRepository;

class SubProductService
{
    public function __construct(
        protected SubProductRepository $repository,
    )
    {
    }

    /**
     * @param array $filterArray
     * @return array
     */
    public function index(array $parametersArray): mixed
    {
        $filterArray = [
            isset($parametersArray['name']) ? new NameFilter($parametersArray['name']) : null,
            isset($parametersArray['product_id']) ? new ProductFilter($parametersArray['product_id']) : null,
        ];

        $filterArray = array_filter($filterArray, fn($var) => $var !== null);

        $result = $this->repository->index($filterArray);

        return $result;
    }

    /**
     * @param array $subProductArray
     * @return array
     */
    public function store(array $subProductArray): array
    {
        $result = $this->repository->store($subProductArray);

        return $result;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): array
    {
        $result = $this->repository->show($id);

        return $result;
    }

    /**
     * @param array $subProductArray
     * @return array
     */
    public function update(array $subProductArray): array
    {
        $result = $this->repository->update($subProductArray);

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): void
    {
        $this->repository->destroy($id);
    }
}
