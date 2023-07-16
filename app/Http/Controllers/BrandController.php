<?php

namespace App\Http\Controllers;

use App\Http\Requests\{CreateBrandRequest};
use App\Http\Services\CreateBrandService;

class BrandController extends Controller {
    public function create(CreateBrandRequest $request) {
        $brandCreated = new CreateBrandService();

        return $brandCreated->execute($request->all());
    }



    // public function deposit(CreateDepositRequest $request) {
    //     $createDepositService = new CreateDepositService();

    //     return $createDepositService->execute(
    //         auth()->user()->id, 
    //         $request->value
    //     );
    // }
}