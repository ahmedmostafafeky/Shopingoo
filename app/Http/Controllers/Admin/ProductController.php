<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\ProductService;
use App\Http\Requests\Admin\ProductSaveRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;

class ProductController extends Controller
{

    private ProductService $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->index();
    }

    public function create()
    {
        return $this->productService->create();
    }

    public function store(ProductSaveRequest $request)
    {
        return $this->productService->store($request->validated());
    }

    public function show(string $id)
    {
        return $this->productService->show($id);
    }

    public function edit(string $id)
    {
        return $this->productService->edit($id);
    }

    public function update(ProductUpdateRequest $request, string $id)
    {
        return $this->productService->update($request->validated(),$id);
    }

    public function destroy(string $id)
    {
        return $this->productService->destroy($id);
    }
}
