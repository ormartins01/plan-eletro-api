<?php

namespace App\Http\Services;

use App\Exceptions\AppError;
use App\Models\Brand;
use App\Models\Product;

class CreateBrandService {
    public function execute(array $data) {
        $brand = Brand::firstWhere('brand_name', $data['brand_name']);

        if(!is_null($brand)) {
            throw new AppError("this brand already exist!", 400);
        }
        
        return Brand::create($data);
    }
}