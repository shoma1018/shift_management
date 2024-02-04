<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>従業員情報編集</title>
    </head>
    <body>
        <h1>従業員情報編集</h1>
        <form action="/admin/info/{{$employee->id}}" method="POST">
            @csrf
            @method('PUT')
            従業員ID：<br>
            <input type="text" name="employee[id]" value = "{{ $employee->id }}"/><br>
            <input type="hidden" name = "employee[multi_auth_user_id]" value = "{{ $employee->multi_auth_user_id}}"/>
            氏名：<br>
            <input type="text" name="employee[name]" value = "{{ $employee->name }}"/><br>
            メールアドレス：<br>
            <input type="text" name="employee[email]" value = "{{ $employee->email }}"/><br>
            パスワード：<br>
            <input type="text" name="employee[password]" value = "{{ $employee->password }}"/><br>
            性別：<br>
            <input type="radio" name="employee[genders]" value = "男性" {{ $employee->genders == "男性" ? "checked" : "" }}>男性</input>
            <input type="radio" name="employee[genders]" value = "女性" {{ $employee->genders == "女性" ? "checked" : "" }}>女性</input><br>
            生年月日：<br>
            <input type="text" name="employee[birthdays]" value = "{{ $employee->birthdays }}"/><br>
            入社年月：<br>
            <input type="text" name="employee[date_of_joining_company]" value = "{{ $employee->date_of_joining_company }}"/><br>
            雇用形態：<br>
            <input type="text" name="employee[employment_status]" value = "{{ $employee->employment_status }}"/><br>
            <input type="submit" value="編集"/>
        </form>
        
        <div>
            <a href="/admin/info">従業員情報</a>
        </div>
        
        <div>
            <a href="/admin/logout">ログアウト</a>
        </div>
    </body>
</html>