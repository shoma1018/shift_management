<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminInformationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
            'admin.name' => 'required|string',
            'admin.genders' => 'required',
            'admin.birthdays' => 'required|date_format:Y-m-d',
            
        ];
    }
    
    public function messages()
    {
        return [
            
            'admin.name' => '氏名を入力してください',
            'admin.genders' => '性別を選択してください',
            'admin.birthdays.required' => '生年月日を入力してください',
            'admin.birthdays.date_format' => '生年月日のフォーマットが正しくありません',
            
            
        ];
    }
}
