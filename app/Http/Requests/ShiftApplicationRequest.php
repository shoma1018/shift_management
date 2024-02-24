<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShiftApplicationRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'shift_pattern.start_time1' => 'nullable|required_with:shift_pattern.end_time1',
            'shift_pattern.end_time1' => 'nullable|required_with:shift_pattern.start_time1|after:shift_pattern.start_time1',
            'shift_pattern.start_time2' => 'nullable|required_with:shift_pattern.end_time2',
            'shift_pattern.end_time2' => 'nullable|required_with:shift_pattern.start_time2|after:shift_pattern.start_time2',
            'shift_pattern.start_time3' => 'nullable|required_with:shift_pattern.end_time3',
            'shift_pattern.end_time3' => 'nullable|required_with:shift_pattern.start_time3|after:shift_pattern.start_time3',
            'shift_pattern.start_time4' => 'nullable|required_with:shift_pattern.end_time4',
            'shift_pattern.end_time4' => 'nullable|required_with:shift_pattern.start_time4|after:shift_pattern.start_time4',
            'shift_pattern.start_time5' => 'nullable|required_with:shift_pattern.end_time5',
            'shift_pattern.end_time5' => 'nullable|required_with:shift_pattern.start_time5|after:shift_pattern.start_time5',
            'shift_pattern.start_time6' => 'nullable|required_with:shift_pattern.end_time6',
            'shift_pattern.end_time6' => 'nullable|required_with:shift_pattern.start_time6|after:shift_pattern.start_time6',
            'shift_pattern.start_time7' => 'nullable|required_with:shift_pattern.end_time7',
            'shift_pattern.end_time7' => 'nullable|required_with:shift_pattern.start_time7|after:shift_pattern.start_time7',
            'shift_application.comment' => 'required|max:300',
        ];
            
            
    }
    
    public function messages()
    {
        return [
            'shift_pattern.start_time1.required_with' => '開始時間を選択してください',
            'shift_pattern.end_time1.required_with' => '終了時間を選択してください',
            'shift_pattern.end_time1.after' => '終了時間を開始時間より後にしてください',
            'shift_pattern.start_time2.required_with' => '開始時間を選択してください',
            'shift_pattern.end_time2.required_with' => '終了時間を選択してください',
            'shift_pattern.end_time2.after' => '終了時間を開始時間より後にしてください',
            'shift_pattern.start_time3.required_with' => '開始時間を選択してください',
            'shift_pattern.end_time3.required_with' => '終了時間を選択してください',
            'shift_pattern.end_time3.after' => '終了時間を開始時間より後にしてください',
            'shift_pattern.start_time4.required_with' => '開始時間を選択してください',
            'shift_pattern.end_time4.required_with' => '終了時間を選択してください',
            'shift_pattern.end_time4.after' => '終了時間を開始時間より後にしてください',
            'shift_pattern.start_time5.required_with' => '開始時間を選択してください',
            'shift_pattern.end_time5.required_with' => '終了時間を選択してください',
            'shift_pattern.end_time5.after' => '終了時間を開始時間より後にしてください',
            'shift_pattern.start_time6.required_with' => '開始時間を選択してください',
            'shift_pattern.end_time6.required_with' => '終了時間を選択してください',
            'shift_pattern.end_time6.after' => '終了時間を開始時間より後にしてください',
            'shift_pattern.start_time7.required_with' => '開始時間を選択してください',
            'shift_pattern.end_time7.required_with' => '終了時間を選択してください',
            'shift_pattern.end_time7.after' => '終了時間を開始時間より後にしてください',
            'shift_application.comment.required' => 'コメントを入力してください',
            'shift_application.comment.max' => 'コメントは300字以内で入力してください',
        ];
    }
}
