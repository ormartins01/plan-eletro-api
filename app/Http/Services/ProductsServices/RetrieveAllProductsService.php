<?php

namespace App\Http\Services\ProductsServices;

use App\Models\Product;

class RetrieveAllProductsService {
    public function execute() {
        return Product::all();

    }


}