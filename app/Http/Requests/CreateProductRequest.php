<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{

    public function authorize(): bool {
        return true;
    }


    public function rules(): array {
        return [
            'name' => 'required',
            'description' => 'required|min:10',
            'tension' => 'required|numeric|min:1|max:380',
            'brand_id' => 'required'
        ];
    }
}