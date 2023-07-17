<?php

namespace App\Http\Services\ProductsServices;

use App\Exceptions\AppError;
use App\Models\Product;

class CreateProductService {
    public function execute(array $data) {
        return Product::create($data);
    }
}