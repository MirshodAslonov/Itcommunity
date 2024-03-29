<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
{ 
    public function rules()
    {
        return [
            'role_id'=>'|required|exists:roles,id',
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|numeric|unique:users,phone',
            'password'=>'required|string|min:4',
        ];
    }
}
