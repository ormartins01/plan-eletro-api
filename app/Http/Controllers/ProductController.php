<?php

namespace App\Http\Controllers;

use App\Http\Requests\{CreateProductRequest, RetrieveProductRequest, UpdateProductRequest};
use App\Http\Services\ProductsServices\CreateProductService;
use App\Http\Services\ProductsServices\DeleteProductService;
use App\Http\Services\ProductsServices\RetrieveAllProductsService;
use App\Http\Services\ProductsServices\RetrieveProductService;
use App\Http\Services\ProductsServices\UpdateProductService;

class ProductController extends Controller {
    public function create(CreateProductRequest $request) {
        $productCreated = new CreateProductService();

        return $productCreated->execute($request->all());
    }

    public function retrieveAll(RetrieveProductRequest $request) {
        $allProducts = new RetrieveAllProductsService();

        return $allProducts->execute();
    }

    public function retrieveProduct($id) {
        $allProducts = new RetrieveProductService();

        return $allProducts->execute($id);
    }

    public function updateProduct(UpdateProductRequest $request, $id) {
        $allProducts = new UpdateProductService();

        return $allProducts->execute($request->all(), $id);
    }

    public function deleteProduct($id) {
        $allProducts = new DeleteProductService();

        return $allProducts->execute($id);
    }
}