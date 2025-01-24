<?php

namespace App\Repositories;

use App\Models\SubProduct;
use App\Piplines\SubProductPipeline;

class SubProductRepository
{
    /**
     * @param array $filterArray
     * @return mixed
     */
    public function index(array $filterArray): mixed
    {
        $pipeline = new SubProductPipeline($filterArray);
        $result = $pipeline->apply(SubProduct::query())->paginate();

        return $result;
    }

    /**
     * @param array $subProductArray
     * @return array
     */
    public function store(array $subProductArray): array
    {
        ;
        //$newRecordId = SubProduct::query()->insertGetId($subProductArray);
        $result = SubProduct::query()->create($subProductArray)->toArray();

        return $result;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): array
    {
        $result = SubProduct::query()->find($id)->toArray();

        return $result;
    }

    /**
     * @param array $subProductArray
     * @return array
     */
    public function update(array $subProductArray): array
    {
        SubProduct::query()
            ->where('id', $subProductArray['id'])
            ->update($subProductArray);
        $result = SubProduct::query()->find($subProductArray['id'])->toArray();

        return $result;
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): bool|null
    {
        $result = SubProduct::query()->find($id)->delete();

        return $result;
    }
}
