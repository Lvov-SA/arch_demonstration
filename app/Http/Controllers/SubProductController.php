<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexSubProductRequest;
use App\Http\Requests\ShowSubProductRequest;
use App\Http\Requests\StoreSubProductRequest;
use App\Http\Requests\UpdateSubProductRequest;
use App\Services\SubProductService;
use Illuminate\Http\Request;

class SubProductController extends Controller
{
    public function __construct(
        protected SubProductService $service
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(IndexSubProductRequest $request)
    {
        $result = $this->service->index($request->all());

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubProductRequest $request)
    {
        $result = $this->service->store($request->all());

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShowSubProductRequest $request, int $productId, int $subProductId)
    {
        $result = $this->service->show($request->input('id'));

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubProductRequest $request, int $productId, int $subProductId)
    {
        $updateArray = array_merge(
            $request->all(),
            ['id' => $subProductId],
        );

        $result = $this->service->update($updateArray);

        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShowSubProductRequest $request)
    {
        $this->service->destroy($request->input('id'));

        return response()->json()->setStatusCode(200);
    }
}
