@extends('employee.header')
@section('title')
    <title>申請履歴</title>
@endsection
@section('content')
    <body>
        <h1 class = "text-2xl text-center mt-10">シフト申請</h1>
        <div class = "flex justify-center text-base mt-12">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">申請日時</th>
                        <th class="border px-4 py-2">シフト希望</th>
                        <th class="border px-4 py-2">コメント</th>
                        <th class="border px-4 py-2">状態</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($shift_applications as $shift_application)
                            <div>
                                <tr>
                                     <td class="border px-4 py-2">{{ $shift_application->created_at }}</td>
                                     <td class="border px-4 py-2 text-center"><a href='/employee/application/shift/{{$shift_application->id}}' class="text-cyan-500 underline">詳細</a></td>
                                     <td class="border px-4 py-2">{{ $shift_application->comment }}</td>
                                     <td class="border px-4 py-2">
                                        @if (isset($shift_application->shiftAccept->consent))
                                            @switch ($shift_application->shiftAccept->consent)
                                                @case(0)
                                                    拒否
                                                    @break;
                                                @case(1)
                                                    承認
                                                    @break;
                                            @endswitch
                                        @else
                                            申請中
                                        
                                        @endif
                                        
                                    </td>
                                </tr>
                            </div>
                        @endforeach
                    </div>
                </tbody>
            </table>
        </div>
            
        <h1 class="text-2xl text-center mt-10">欠勤申請</h1>
        <div class = "flex justify-center text-base mt-12">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">申請日時</th>
                        <th class="border px-4 py-2">欠勤日</th>
                        <th class="border px-4 py-2">出勤時間</th>
                        <th class="border px-4 py-2">代行者</th>
                        <th class="border px-4 py-2">欠勤理由</th>
                        <th class="border px-4 py-2">状態</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($absence_applications as $absence_application)
                            <div>
                                <tr>
                                     <td class="border px-4 py-2">{{ $absence_application->created_at }}</td>
                                     <td class="border px-4 py-2">{{ $absence_application->absenceShift->date}}</td>
                                     <td class="border px-4 py-2">{{ $absence_application->absenceShift->start_time}} ~ {{ $absence_application->absenceShift->end_time}}</td>
                                     <td class="border px-4 py-2">{{ $absence_application->absenceShift->substitute }}</td>
                                     <td class="border px-4 py-2">{{ $absence_application->absenceShift->reason }}</td>
                                     <td class="border px-4 py-2">
                                        @if (isset($absence_application->absenceAccept->consent))
                                            @switch ($absence_application->absenceAccept->consent)
                                                @case(0)
                                                    拒否
                                                    @break;
                                                @case(1)
                                                    承認
                                                    @break;
                                            @endswitch
                                        @else
                                            申請中
                                        @endif
                                    </td>
                                </tr>
                            </div>
                        @endforeach
                    </div>
                </tbody>
            </table>
        </div>
    </body>
@endsection