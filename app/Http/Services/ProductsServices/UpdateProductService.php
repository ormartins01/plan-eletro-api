<?php

namespace App\Http\Services\ProductsServices;

use App\Exceptions\AppError;
use App\Models\Product;

class UpdateProductService {
    public function execute(array $data, string $id) {
        $product = Product::findOrFail($id);

        if(is_null($product)) {
            throw new AppError("this product dont exist!", 404);
        }

        $product->update($data);
        
        $product->save();

        return $product;
    }
}