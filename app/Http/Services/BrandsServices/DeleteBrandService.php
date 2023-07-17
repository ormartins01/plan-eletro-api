<?php

namespace App\Http\Services\BrandsServices;

use App\Exceptions\AppError;
use App\Models\Brand;

class DeleteBrandService {
    public function execute($id) {
        $brand = Brand::find($id);

        if(is_null($brand)) {
            throw new AppError("this brand dont exist!", 404);
        }

        $brand->delete();
   
        return response()->noContent();
    }
}