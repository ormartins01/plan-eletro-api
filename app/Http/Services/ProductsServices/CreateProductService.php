<?php

namespace App\Http\Services\ProductsServices;

use App\Exceptions\AppError;
use App\Models\Product;

class CreateProductService {
    public function execute(array $data) {
        $brandExist = $this->findBrand($data['brand_id']);

        if(is_null($brandExist)) {
            throw new AppError('this brand id dont exists!', 400);
        }

        return Product::create($data);
    }

    private function findBrand(string $id) {
        // $user = User::find($id);

        // if(is_null($user)) {
        //     throw new AppError("user with this {$id} dont exist!", 404);
        // }

        return $id;
    }
}