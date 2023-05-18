<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category_id' => '|required|exists:categories,id',
            'text' => '|required|string',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        dd($validator->errors());
    }
}
