<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'shift.date' => 'required|date',
            'shift.image' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            'shift.date' => '日付を選択してください',
            'shift.image' => 'ファイルを選択してください',
        ];
    }
}
