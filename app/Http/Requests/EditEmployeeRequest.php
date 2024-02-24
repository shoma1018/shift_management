<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEmployeeRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
            'employee.name' => 'required|string',
            'employee.genders' => 'required',
            'employee.birthdays' => 'required|date_format:Y-m-d',
            'employee.date_of_joining_company' => 'required|date_format:Y-m-d',
            'employee.employment_status' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            
            'employee.name' => '氏名を入力してください',
            'employee.genders' => '性別を選択してください',
            'employee.birthdays.required' => '生年月日を入力してください',
            'employee.birthdays.date_format' => '生年月日のフォーマットが正しくありません',
            'employee.date_of_joining_company.required' => '入社日を入力してください',
            'employee.date_of_joining_company.date_format' => '入社日のフォーマットが正しくありません',
            'employee.employment_status' => '雇用形態を入力してください',
            
        ];
    }
}
