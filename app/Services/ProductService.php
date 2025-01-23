<?php

namespace App\Services;

use App\Piplines\Filters\NameFilter;
use App\Repositories\ProductRepository;

class ProductService
{
    public function __construct(
        protected ProductRepository $repository,
    )
    {
    }

    /**
     * @param array $parametersArray
     * @return array
     */
    public function index(array $parametersArray): mixed
    {
        $filterArray = [
            isset($parametersArray['name']) ? new NameFilter($parametersArray['name']) : null,
         ];

        $filterArray = array_filter($filterArray, fn($var) => $var !== null);

        $result = $this->repository->index($filterArray);

        return $result;
    }

    /**
     * @param array $productArray
     * @return array
     */
    public function store(array $productArray): array
    {
        $result = $this->repository->store($productArray);

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
     * @param array $productArray
     * @return array
     */
    public function update(array $productArray): array
    {
        $result = $this->repository->update($productArray);

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
