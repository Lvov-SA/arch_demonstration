<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $service
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $parametersArray = array_merge($request->all());
        $result = $this->service->index($parametersArray);

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $result = $this->service->store($request->all());

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $productId)
    {
        $result = $this->service->show($productId);

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, int $productId)
    {
        $updateArray = array_merge(
            $request->all(),
            ['id' => $productId],
        );

        $result = $this->service->update($updateArray);

        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $productId)
    {
        $this->service->destroy($productId);

        return response()->json()->setStatusCode(200);
    }
}
