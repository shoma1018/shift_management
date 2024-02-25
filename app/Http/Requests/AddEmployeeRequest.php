<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEmployeeRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'employee.employee_id' => 'required|unique:multi_auth_users,id',
            'employee.name' => 'required|string',
            'employee.email' => 'required|email:filter|unique:employees,email',
            'employee.password' => 'required|string|min:8',
            'employee.genders' => 'required',
            'employee.birthdays' => 'required|date_format:Y-m-d',
            'employee.date_of_joining_company' => 'required|date_format:Y-m-d',
            'employee.employment_status' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            'employee.employee_id.required' => 'idを入力してください',
            'employee.employee_id.unique' => 'このidはすでに登録されています',
            'employee.name' => '氏名を入力してください',
            'employee.email.required' => 'メールアドレスを入力してください',
            'employee.email.email' => 'メールアドレスの形式が正しくありません',
            'employee.email.unique' => 'このメールアドレスはすでに登録されています',
            'employee.password.required' => 'パスワードを入力してください',
            'employee.password.min' => 'パスワードは8文字以上の文字列を使用してください',
            'employee.genders' => '性別を選択してください',
            'employee.birthdays.required' => '生年月日を入力してください',
            'employee.birthdays.date_format' => '生年月日のフォーマットが正しくありません',
            'employee.date_of_joining_company.required' => '入社日を入力してください',
            'employee.date_of_joining_company.date_format' => '入社日のフォーマットが正しくありません',
            'employee.employment_status' => '雇用形態を入力してください',
            
        ];
    }
}
