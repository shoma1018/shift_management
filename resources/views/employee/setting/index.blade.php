<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>管理者</title>
    </head>
    <body>
        <h1>ユーザー情報</h1>
        
        <div>
            <a href="/employee/dashboard">Home</a>
        </div>
        
        <div>
            <a href="/employee/setting/edit">編集</a>
        </div>
        
        <div class="employee_information">
            ID：<br>
            <p>{{$employee->id}}</p>
            氏名：<br>
            <p>{{$employee->name}}</p>
            メールアドレス：<br>
            <p>{{$employee->email}}</p>
            パスワード：<br>
            <p>{{$employee->password}}</p>
            性別：<br>
            <p>{{$employee->genders}}</p>
            生年月日：<br>
            <p>{{$employee->birthdays}}</p>
            入社年月：<br>
            <p>{{$employee->date_of_joining_company}}</p>
            雇用形態：<br>
            <p>{{$employee->employment_status}}</p>
        </div>
        
        <div>
            <a href="/admin/info">従業員情報</a>
        </div>
        
        <div>
            <a href="/admin/logout">ログアウト</a>
        </div>
    </body>
</html>