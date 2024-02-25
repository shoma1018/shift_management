@extends('admin.header')
@section('title')
    <title>従業員情報一覧</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-10">従業員情報一覧</h1>
        <div class="container mx-auto">
            <div class="mt-10 ml-5">
                <div class="p-2 w-full">
                  <button type = "submit" class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">
                      <a href="/admin/info/create">追加</a>
                  </button>
                </div>
            </div>
        </div>
            
        <div class = "text-base mt-12">
            <table class="container mx-auto table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">従業員ID</th>
                        <th class="border px-4 py-2">氏名</th>
                        <th class="border px-4 py-2">性別</th>
                        <th class="border px-4 py-2">生年月日</th>
                        <th class="border px-4 py-2">入社年月</th>
                        <th class="border px-4 py-2">雇用形態</th>
                        <th class="border px-4 py-2">編集</th>
                        <th class="border px-4 py-2">削除</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td class="border px-4 py-2 text-center">{{ $employee->id }}</td>
                            <td class="border px-4 py-2 text-center">{{ $employee->name }}</td>
                            <td class="border px-4 py-2 text-center">{{ $employee->genders }}</td>
                            <td class="border px-4 py-2 text-center">{{ $employee->birthdays }}</td>
                            <td class="border px-4 py-2 text-center">{{ $employee->date_of_joining_company}}</td>
                            <td class="border px-4 py-2 text-center">{{ $employee->employment_status }}</td>
                            <td class="border px-4 py-2 text-center">
                                <div class="p-2 w-full">
                                    <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-0.5 px-2 focus:outline-none hover:bg-green-600 rounded text-lg">
                                        <a href="/admin/info/{{ $employee->id }}/edit">編集</a>
                                    </button>
                                </div>
                            </td>
                            <td class="border px-4 py-2 text-center">
                                <form class = "mb-0" action="/admin/info/{{ $employee->id }}" id="form_{{ $employee->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type = "button" onclick="deleteEmployee({{ $employee->id }})" class="flex mx-auto text-white bg-red-500 border-0 py-0.5 px-2 focus:outline-none hover:bg-red-600 rounded text-lg">
                                        削除
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <script>
            function deleteEmployee(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
@endsection