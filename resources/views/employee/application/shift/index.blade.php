<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>シフト申請履歴</title>
    </head>
    <body>
        <h1>シフト申請履歴</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>申請日時</th>
                        <th>シフト希望</th>
                        <th>コメント</th>
                        <th>状態</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($shift_applications as $shift_application)
                            <div>
                                <tr>
                                     <td>{{ $shift_application->created_at }}</td>
                                     <td><a href='/employee/application/{{$shift_application->id}}'>詳細</a></td>
                                     <td>{{ $shift_application->comment }}</td>
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
                            </div>
                        @endforeach
                    </div>
                </tbody>
            </table>
        </div>
    </body>
</html>