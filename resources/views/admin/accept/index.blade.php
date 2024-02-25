@extends('admin.header')
@section('title')
    <title>申請承認</title>
@endsection
@section('content')
    <body>
        <h1 class = "text-2xl text-center mt-10">シフト申請承認</h1>
        <div class = "text-base text-center mt-12">
            <form action="/admin/accept" method="GET">
                @csrf
                <label for="date">シフト申請検索</label><br>
                <input class = "mt-7 rounded-lg border border-gray-500" type="date" name="shift_from" value="{{ old('shift_from') }}" />
                <span class="mx-3">~</span>
                <input class = "mt-7 rounded-lg border border-gray-500" type="date" name="shift_until" value="{{ old('shift_until') }}" />
                <div class="bg-gray-50 inline-flex border border-gray-200 rounded-lg text-gray-900 select-none divide-x">
                    <button type="submit" class="py-0.5 px-4 bg-gray-50 hover:bg-gray-100 active:bg-gray-200 border border-gray-500 first:rounded-l-lg last:rounded-r-lg">
                        検索
                    </button>
                </div>
            </form>
        </div>
        
        <div class = "flex justify-center text-base mt-12">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">申請者</th>
                        <th class="border px-4 py-2">申請日時</th>
                        <th class="border px-4 py-2">シフト希望</th>
                        <th class="border px-4 py-2">コメント</th>
                        <th class="border px-4 py-2">承認/拒否</th>
                        <th class="border px-4 py-2">状態</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shift_applications as $shift_application)

                        <tr>
                            <td class="border px-4 py-2">{{$shift_application->employee->name}}</td>
                            <td class="border px-4 py-2">{{ $shift_application->created_at }}</td>
                            <td class="border px-4 py-2 text-center"><a href = '/admin/application/shift/{{$shift_application->id}}' class="text-cyan-500 underline">詳細</a></td>
                            <td class="border px-4 py-2">{{ $shift_application->comment }}</td>
                            
                            <td class="flex items-center border px-4 py-2">
                                <form class = "mb-0" action = '/admin/accept/shift/{{$shift_application->id}}' method = 'POST'>
                                    @csrf
                                    @method('PUT')
                                    <div class="p-2 w-full">
                                      <button type = "submit" name="accept" value="1" class="text-white bg-green-500 border-0 py-0.5 px-2 focus:outline-none hover:bg-green-600 rounded text-lg">
                                          承認
                                      </button>
                                    </div>
                                    <div class="p-2 w-full">
                                      <button type = "submit" name="accept" value="0" class="text-white bg-red-500 border-0 py-0.5 px-2 focus:outline-none hover:bg-red-600 rounded text-lg">
                                          拒否
                                      </button>
                                    </div>
                                </form>
                            </td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
            
        <h1 class = "text-2xl text-center mt-20">欠勤申請承認</h1>
        <div class = "text-base text-center mt-12">
            <form action="/admin/accept" method="GET">
                @csrf
                <label for="date">欠勤申請検索</label><br>
                <input class = "mt-7 rounded-lg border border-gray-500" type="date" name="absence_from" value="{{ old('absence_from') }}"/>
                <span class="mx-3">~</span>
                <input class = "mt-7 rounded-lg border border-gray-500" type="date" name="absence_until" value="{{ old('absence_until') }}"/>
                <div class="bg-gray-50 inline-flex border border-gray-200 rounded-lg text-gray-900 select-none divide-x">
                    <button type="submit" class="py-0.5 px-4 bg-gray-50 hover:bg-gray-100 active:bg-gray-200 border border-gray-500 first:rounded-l-lg last:rounded-r-lg">
                        検索
                    </button>
                </div>
            </form>
        </div>
        
        <div class = "flex justify-center text-base mt-12">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">申請者</th>
                        <th class="border px-4 py-2">申請日時</th>
                        <th class="border px-4 py-2">欠勤日</th>
                        <th class="border px-4 py-2">出勤時間</th>
                        <th class="border px-4 py-2">代行者</th>
                        <th class="border px-4 py-2">欠勤理由</th>
                        <th class="border px-4 py-2">承認/拒否</th>
                        <th class="border px-4 py-2">状態</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absence_applications as $absence_application)

                        <tr>
                            <td class="border px-4 py-2">{{ $absence_application->employee->name }}</td>
                            <td class="border px-4 py-2">{{ $absence_application->created_at }}</td>
                            <td class="border px-4 py-2">{{ $absence_application->absenceShift->date }}</td>
                            <td class="border px-4 py-2">{{ $absence_application->absenceShift->start_time }} ~ {{ $absence_application->absenceShift->end_time }}</td>
                            <td class="border px-4 py-2">{{ $absence_application->absenceShift->substitute }}</td>
                            <td>{{ $absence_application->absenceShift->reason }}</td>
                            <td class="border px-4 py-2">
                                <form action = '/admin/accept/absence/{{$absence_application->id}}' method = 'POST'>
                                    @csrf
                                    @method('PUT')
                                    <div class="p-2 w-full">
                                      <button type = "submit" name="accept" value="1" class="text-white bg-green-500 border-0 py-0.5 px-2 focus:outline-none hover:bg-green-600 rounded text-lg">
                                          承認
                                      </button>
                                    </div>
                                    <div class="p-2 w-full">
                                      <button type = "submit" name="accept" value="0" class="text-white bg-red-500 border-0 py-0.5 px-2 focus:outline-none hover:bg-red-600 rounded text-lg">
                                          拒否
                                      </button>
                                    </div>
                                </form>
                            </td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection
</html>