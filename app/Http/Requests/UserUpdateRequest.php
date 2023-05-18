<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class UserUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id'=>'required|exists:users,id',
            'role_id'=>'|required|exists:roles,id',
            'name'=>'required|string',
            'email'=>'required|email|',
            'phone'=>'required|numeric|',
            'password'=>'required|string|min:4',
        ];
    }
    
}
