<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>申請承認</title>
    </head>
    <body>
        <h1>シフト申請承認</h1>
        <form action="/admin/accept" method="GET">
            @csrf
            <label for="date">シフト申請検索</label><br>
            <input type="date" name="from" value=""/>
            <span class="mx-3">~</span>
            <input type="date" name="until" value=""/>
            <input type="submit" value="検索"/>
        </form>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>申請者</th>
                        <th>申請日時</th>
                        <th>シフト希望</th>
                        <th>コメント</th>
                        <th>承認/拒否</th>
                        <th>状態</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shift_applications as $shift_application)

                        <tr>
                            <td>{{$shift_application->employee->name}}</td>
                            <td>{{ $shift_application->created_at }}</td>
                            <td><a href = '/employee/application/{{$shift_application->id}}'>詳細</a></td>
                            <td>{{ $shift_application->comment }}</td>
                            
                            <td>
                                <form action = '/admin/accept/shift/{{$shift_application->id}}' method = 'POST'>
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" name="accept" value="1">承認</button>
                                    <button type="submit" name="accept" value="0">拒否</button>
                                </form>
                            </td>
                            <td>
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
                    @endforeach
                </tbody>
            </table>
            
        <h1>欠勤申請承認</h1>
        <form action="/admin/accept" method="GET">
            @csrf
            <label for="date">欠勤申請検索</label><br>
            <input type="date" name="from" value=""/>
            <span class="mx-3">~</span>
            <input type="date" name="until" value=""/>
            <input type="submit" value="検索"/>
        </form>
            <table>
                <thead>
                    <tr>
                        <th>申請者</th>
                        <th>申請日時</th>
                        <th>欠勤日</th>
                        <th>出勤時間</th>
                        <th>代行者</th>
                        <th>欠勤理由</th>
                        <th>承認/拒否</th>
                        <th>状態</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absence_applications as $absence_application)

                        <tr>
                            <td>{{ $absence_application->employee->name }}</td>
                            <td>{{ $absence_application->created_at }}</td>
                            <td>{{ $absence_application->absenceShift->date }}</td>
                            <td>{{ $absence_application->absenceShift->start_time }} ~ {{ $absence_application->absenceShift->end_time }}</td>
                            <td>{{ $absence_application->absenceShift->substitute }}</td>
                            <td>{{ $absence_application->absenceShift->reason }}</td>
                            <td>
                                <form action = '/admin/accept/absence/{{$absence_application->id}}' method = 'POST'>
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" name="accept" value="1">承認</button>
                                    <button type="submit" name="accept" value="0">拒否</button>
                                </form>
                            </td>
                            <td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>