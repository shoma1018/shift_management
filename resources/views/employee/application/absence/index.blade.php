<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>欠勤申請履歴</title>
    </head>
    <body>
        <h1>欠勤申請履歴</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>申請日時</th>
                        <th>欠勤日</th>
                        <th>出勤時間</th>
                        <th>代行者</th>
                        <th>欠勤理由</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($absence_applications as $absence_application)
                            <div>
                                <tr>
                                     <td>{{ $absence_application->created_at }}</td>
                                     @foreach ($absence_shifts as $absence_shift)
                                     <td>{{ $absence_shift->date}}:</td>
                                     <td>{{ $absence_shift->start_time}} ~ {{ $absence_shift->end_time}}</td>
                                     <td>{{ $absence_shift->substitute }}</td>
                                     <td>{{ $absence_shift->reason }}</td>
                                     @endforeach
                                </tr>
                            </div>
                        @endforeach
                    </div>
                </tbody>
            </table>
        </div>
    </body>
</html>