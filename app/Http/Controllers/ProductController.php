<?php

namespace App\Http\Controllers;

use App\Http\Requests\{CreateProductRequest, RetrieveProductRequest};
use App\Http\Services\ProductsServices\CreateProductService;
use App\Http\Services\ProductsServices\RetrieveAllProductsService;
use App\Http\Services\ProductsServices\RetrieveProductService;

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
}