@extends('admin.header')
@section('title')
    <title>希望シフト</title>
@endsection
@section('content')
    <body>
        <h1 class = "text-2xl text-center mt-10">希望シフト</h1>
        <div class = "flex justify-center text-base mt-12">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">曜日</th>
                        <th class="border px-4 py-2">時間</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shift_patterns as $shift_pattern)
                        <tr>
                            <td class="border px-4 py-2">
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
                            </td>
                            <td class="border px-4 py-2">{{ $shift_pattern->start_time }} ~ {{ $shift_pattern->end_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection