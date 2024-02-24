<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8',
        ];
    }
    
    public function messages()
    {
        return [
            'current_password.required' => '現在のパスワードを入力してください',
            'current_password.min' => 'パスワードは8文字以上の文字列を使用してください',
            'new_password.required' => '新しいパスワードを入力してください',
            'new_password.min' => 'パスワードは8文字以上の文字列を使用してください',
            'confirm_password.required' => '新しいパスワードを入力してください',
            'confirm_password.min' => 'パスワードは8文字以上の文字列を使用してください',
        ];
    }
}

