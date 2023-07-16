<?php

namespace App\Http\Controllers;

use App\Http\Requests\{CreateBrandRequest};
use App\Http\Services\CreateBrandService;
use App\Models\Brand;

class BrandController extends Controller {
    public function create(CreateBrandRequest $request) {
        $brandCreated = new CreateBrandService();

        return $brandCreated->execute($request->all());
    }

    public function retrieveAll() {
        return Brand::all();

    }
}