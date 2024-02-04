<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>従業員情報登録</title>
    </head>
    <body>
        <h1>従業員情報登録</h1>
        <form action="/admin/info" method="POST">
            @csrf
            従業員ID：<br>
            <input type="text" name="employee[id]" placeholder="1"/><br>
            氏名：<br>
            <input type="text" name="employee[name]" placeholder="山田太郎"/><br>
            メールアドレス：<br>
            <input type="text" name="employee[email]" placeholder="employee@gmail.com"/><br>
            パスワード：<br>
            <input type="text" name="employee[password]" placeholder="password"/><br>
            性別：<br>
            <input type="radio" name="employee[genders]" value = "男性">男性</input>
            <input type="radio" name="employee[genders]" value = "女性">女性</input><br>
            生年月日：<br>
            <input type="text" name="employee[birthdays]" placeholder="2000-5-10"/><br>
            入社年月：<br>
            <input type="text" name="employee[date_of_joining_company]" placeholder="2020-6-20"/><br>
            雇用形態：<br>
            <input type="text" name="employee[employment_status]" placeholder="アルバイト"/><br>
            <input type="submit" value="登録"/>
        </form>
        
        <div>
            <a href="/admin/logout">ログアウト</a>
        </div>
    </body>
</html>