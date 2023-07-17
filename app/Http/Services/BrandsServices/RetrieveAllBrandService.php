<?php

namespace App\Http\Services\BrandsServices;

use App\Models\Brand;

class RetrieveAllBrandService {
    public function execute() {
        return Brand::all();

    }


}