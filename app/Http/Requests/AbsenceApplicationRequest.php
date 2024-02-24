<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbsenceApplicationRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'absence_shift.date' => 'required|date',
            'absence_shift.start_time' => 'required',
            'absence_shift.end_time' => 'required|after:absence_shift.start_time',
            'absence_shift.substitute' => 'required|string|max:100',
            'absence_shift.reason' => 'required|string|max:200',
        ];
    }
    
    public function messages()
    {
        return [
            'absence_shift.date.required' => '日付を選択してください',
            'absence_shift.start_time.required' => '開始時間を選択してください',
            'absence_shift.end_time.required' => '終了時間を選択してください',
            'absence_shift.end_time.after' => '終了時間を開始時間より後にしてください',
            'absence_shift.substitute.required' => '代行者あるいは未定と入力してください',
            'absence_shift.substitute.max' => '100字以内で入力してください',
            'absence_shift.reason.required' => '欠勤理由を入力してください',
            'absence_shift.reason.max' => '200字以内で入力してください',
        ];
    }
}
