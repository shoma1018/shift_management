<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>管理者</title>
    </head>
    <body>
        <h1>管理者情報</h1>
        
        <div>
            <a href="/admin/dashboard">Home</a>
        </div>
        
        <div>
            <a href="/admin/setting/edit">編集</a>
        </div>
        
        <div class="admin_information">
            ID：<br>
            <p>{{$admin->id}}</p>
            氏名：<br>
            <p>{{$admin->name}}</p>
            メールアドレス：<br>
            <p>{{$admin->email}}</p>
            パスワード：<br>
            <p>{{$admin->password}}</p>
            性別：<br>
            <p>{{$admin->genders}}</p>
            生年月日：<br>
            <p>{{$admin->birthdays}}</p>
        </div>
        
        <div>
            <a href="/admin/info">従業員情報</a>
        </div>
        
        <div>
            <a href="/admin/logout">ログアウト</a>
        </div>
    </body>
</html>