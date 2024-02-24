<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class EmailRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'current_email' => ['required', 'email:filter'],
            'new_email' => ['required', 'email:filter', Rule::unique('admins', 'email')->ignore(Auth::id()), Rule::unique('employees', 'email')->ignore(Auth::id())],
            'confirm_email' => ['required', 'email:filter', Rule::unique('admins', 'email')->ignore(Auth::id()), Rule::unique('employees', 'email')->ignore(Auth::id())],
        ];
       
    }
    
     public function messages()
    {
        return [
            'current_email.required' => '現在のメールアドレスを入力してください',
            'current_email.email' => 'メールアドレスの形式が正しくありません',
            'new_email.required' => '新しいメールアドレスを入力してください',
            'new_email.email' => 'メールアドレスの形式が正しくありません',
            'new_email.unique' => 'このメールアドレスはすでに使われています',
            'confirm_email.required' => '新しいメールアドレスを入力してください',
            'confirm_email.email' => 'メールアドレスの形式が正しくありません',
            'confirm_email.unique' => 'このメールアドレスはすでに使われています',
            
        ];
    }
}

