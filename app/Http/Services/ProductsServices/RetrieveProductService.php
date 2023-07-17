<?php

namespace App\Http\Services\ProductsServices;

use App\Exceptions\AppError;
use App\Models\Product;

class RetrieveProductService {
    public function execute(string $id) {
        $product = Product::find($id);

        if(is_null($product)) {
            throw new AppError("this product dont exist!", 404);
        }

        return $product;
    }
}