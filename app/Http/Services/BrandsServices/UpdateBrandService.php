<?php

namespace App\Http\Services\BrandsServices;

use App\Exceptions\AppError;
use App\Models\Brand;

class UpdateBrandService {
    public function execute(array $data, string $id) {
        $brand = Brand::findOrFail($id);

        if(is_null($brand)) {
            throw new AppError("this brand dont exist!", 404);
        }

        $brand->update($data);
        
        $brand->save();

        return $brand;
    }
}