<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShiftApplication;
use App\Models\AbsenceApplication;

class AcceptController extends Controller
{
    public function index(Request $request, ShiftApplication $shift_application, AbsenceApplication $absence_application)
    {
        //シフト申請の取得
        $shift_from = $request['shift_from'];
        $shift_until = $request['shift_until'];
        
        //全件取得
        $selected_shift_applications = $shift_application->get();
        //期間検索
        if (isset($shift_from) && isset($shift_until)) {
            $selected_shift_applications = $shift_application->whereBetween("created_at", [$shift_from, $shift_until])->get();
        }
        
        //欠勤申請の取得
        $absence_from = $request['absence_from'];
        $absence_until = $request['absence_until'];
        
        //全件取得
        $selected_absence_applications = $absence_application->get();
        //期間検索
        if (isset($absence_from) && isset($absence_until)) {
            $selected_absence_applications = $absence_application->whereBetween("created_at", [$absence_from, $absence_until])->get();
        }
        
        return view('admin.accept.index')->with(['shift_applications' => $selected_shift_applications, 'absence_applications' => $selected_absence_applications]);
    }
    
    public function shiftAccept(Request $request, ShiftApplication $shift_application)
    {
        $accept = $request->input('accept'); // 1または0を取得
        
        switch ($accept) {
            //拒否処理
            case 0:
                $shift_application->shiftAccept->consent = 0;
                $shift_application->shiftAccept->save();
                break;
            //承認処理
            case 1:
                $shift_application->shiftAccept->consent = 1;
                $shift_application->shiftAccept->save();
                break;
        }
        
        return redirect('/admin/accept');
    }
    
    public function absenceAccept(Request $request, AbsenceApplication $absence_application)
    {
        $accept = $request->input('accept'); // 1または0を取得
        
        switch ($accept) {
            //拒否処理
            case 0:
                $absence_application->absenceAccept->consent = 0;
                $absence_application->absenceAccept->save();
                break;
            //承認処理
            case 1:
                $absence_application->absenceAccept->consent = 1;
                $absence_application->absenceAccept->save();
                break;
        }
        
        return redirect('/admin/accept');
    }
    
}
