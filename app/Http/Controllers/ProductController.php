<?php

namespace App\Http\Controllers;

use App\Http\Requests\{CreateProductRequest};
use App\Http\Services\CreateProductService;

class ProductController extends Controller {
    public function create(CreateProductRequest $request) {
        $productCreated = new CreateProductService();

        return $productCreated->execute($request->all());
    }



    // public function deposit(CreateDepositRequest $request) {
    //     $createDepositService = new CreateDepositService();

    //     return $createDepositService->execute(
    //         auth()->user()->id, 
    //         $request->value
    //     );
    // }
}