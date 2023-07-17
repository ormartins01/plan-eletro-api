<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{

    public function authorize(): bool {
        return true;
    }


    public function rules(): array {
        return [
            'description' => 'min:10',
            'tension' => 'numeric|min:1|max:380',
        ];
    }
}