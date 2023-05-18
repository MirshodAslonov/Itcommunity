<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required_if:id,true|exists:categories,id',
            'title' => '|required|string',
            'status' => '|boolean',
        ];
    }
}
