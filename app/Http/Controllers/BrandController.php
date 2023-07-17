<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Http\Services\BrandsServices\CreateBrandsService;
use App\Http\Services\BrandsServices\DeleteBrandService;
use App\Http\Services\BrandsServices\RetrieveAllBrandService;
use App\Http\Services\BrandsServices\RetrieveBrandService;
use App\Http\Services\BrandsServices\UpdateBrandService;

class BrandController extends Controller {
    public function create(CreateBrandRequest $request) {
        $brandCreated = new CreateBrandsService();

        return $brandCreated->execute($request->all());
    }

    public function retrieveAll() {
        $allBrands = new RetrieveAllBrandService();

        return $allBrands->execute();
    }

    public function retrieveBrand($id) {
        $brand = new RetrieveBrandService();

        return $brand->execute($id);
    }

    public function updateBrand(UpdateBrandRequest $request, $id) {
        $brand = new UpdateBrandService();

        return $brand->execute($request->all(), $id);
    }

    public function deleteBrand($id) {
        $brand = new DeleteBrandService();

        return $brand->execute($id);
    }
}