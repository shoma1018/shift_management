<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>希望シフト</title>
    </head>
    <body>
        <h1>希望シフト</h1>
        @foreach ($shift_patterns as $shift_pattern)
            <div>
                @switch ($shift_pattern->day)
                    @case(1)
                        <p>月曜日</p>
                        @break;
                    @case(2)
                        <p>火曜日</p>
                        @break;
                    @case(3)
                        <p>水曜日</p>
                        @break;
                    @case(4)
                        <p>木曜日</p>
                        @break;
                    @case(5)
                        <p>金曜日</p>
                        @break;
                    @case(6)
                        <p>土曜日</p>
                        @break;
                    @case(7)
                        <p>日曜日</p>
                        @break;
                @endswitch
                {{ $shift_pattern->start_time }} ~ {{ $shift_pattern->end_time }}
            </div>
        @endforeach
       
    </body>
</html>