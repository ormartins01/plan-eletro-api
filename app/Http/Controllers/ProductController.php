<?php

namespace App\Http\Controllers;

use App\Http\Requests\{CreateProductRequest};
use App\Http\Services\CreateProductService;
use App\Models\Product;

class ProductController extends Controller {
    public function create(CreateProductRequest $request) {
        $productCreated = new CreateProductService();

        return $productCreated->execute($request->all());
    }

    public function retrieveAll() {
        // $allProducts = new RetrieveAllProducts();

        // return $allProducts;

    }
}