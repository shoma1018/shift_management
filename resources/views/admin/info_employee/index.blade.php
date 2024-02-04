<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>従業員情報一覧</title>
    </head>
    <body>
        <h1>従業員情報一覧</h1>
         <div>
            <a href="/admin/dashboard">Home</a>
        </div>
         <div>
            <a href="/admin/info/create">追加</a>
        </div>
        
        <div>
            <table>
                <thead>
                    <tr>
                        <th>従業員ID</th>
                        <th>氏名</th>
                        <th>性別</th>
                        <th>生年月日</th>
                        <th>入社年月</th>
                        <th>雇用形態</th>
                        <th>編集</th>
                    </tr>
                </thead>
                <tbody>
                    <div class='employees'>
                        @foreach ($employees as $employee)
                            <div class='employee'>
                                <tr>
                                  <td>{{ $employee->id }}</td>
                                  <td>{{ $employee->name }}</td>
                                  <td>{{ $employee->genders }}</td>
                                  <td>{{ $employee->birthdays }}</td>
                                  <td>{{ $employee->date_of_joining_company}}</td>
                                  <td>{{ $employee->employment_status }}</td>
                                  <td><a href="/admin/info/{{ $employee->id }}/edit">編集</a></td>
                                  <td>
                                       <form action="/admin/info/{{ $employee->id }}" id="form_{{ $employee->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="deleteEmployee({{ $employee->id }})">削除</button> 
                                        </form>
                                  </td>
                                </tr>
                            </div>
                        @endforeach
                    </div>
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
        
        <div>
            <a href="/admin/logout">ログアウト</a>
        </div>
    </body>
</html>