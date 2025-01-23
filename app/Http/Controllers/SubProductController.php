<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubProductRequest;
use App\Http\Requests\UpdateSubProductRequest;
use App\Models\SubProduct;
use App\Piplines\Filters\NameFilter;
use App\Piplines\Filters\ProductFilter;
use App\Piplines\SubProductPipeline;
use Illuminate\Http\Request;

class SubProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $productId)
    {
        $pipeline = new SubProductPipeline([
            new ProductFilter($productId ?? null),
            new NameFilter($request->input('name') ?? null),
        ]);
        $products = $pipeline->apply(SubProduct::query())->get();
return
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SubProduct $subProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubProduct $subProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubProductRequest $request, SubProduct $subProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubProduct $subProduct)
    {
        //
    }
}
