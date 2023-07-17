<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
{

    public function authorize(): bool {
        return true;
    }


    public function rules(): array {
        return [
            'brand_name' => 'required',
        ];
    }
}