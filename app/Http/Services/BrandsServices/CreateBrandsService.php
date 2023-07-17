<?php

namespace App\Http\Services\BrandsServices;

use App\Exceptions\AppError;
use App\Models\Brand;

class CreateBrandsService {
    public function execute(array $data) {
        $brand = Brand::firstWhere('brand_name', $data['brand_name']);

        if(!is_null($brand)) {
            throw new AppError("this brand already exist!", 400);
        }
        
        return Brand::create($data);
    }


}