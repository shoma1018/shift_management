<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>管理者</title>
    </head>
    <body>
        <h1>管理者情報編集</h1>
        
        <div>
            <a href="/admin/dashboard">Home</a>
        </div>
        
        <div class="admin_information_edit">
            <form action="/admin/setting/{{$admin->id}}" method="POST">
            @csrf
            @method('PUT')
            ID：<br>
            <input type="text" name="admin[id]" value = "{{ $admin->id }}"/><br>
            <input type="hidden" name = "admin[multi_auth_user_id]" value = "{{ $admin->multi_auth_user_id}}"/>
            氏名：<br>
            <input type="text" name="admin[name]" value = "{{ $admin->name }}"/><br>
            メールアドレス：<br>
            <input type="text" name="admin[email]" value = "{{ $admin->email }}"/><br>
            パスワード：<br>
            <input type="text" name="admin[password]" value = "{{ $admin->password }}"/><br>
            性別：<br>
            <input type="radio" name="admin[genders]" value = "男性" {{ $admin->genders == "男性" ? "checked" : "" }}>男性</input>
            <input type="radio" name="admin[genders]" value = "女性" {{ $admin->genders == "女性" ? "checked" : "" }}>女性</input><br>
            生年月日：<br>
            <input type="text" name="admin[birthdays]" value = "{{ $admin->birthdays }}"/><br>
            <input type="submit" value="編集"/>
            </form>
        </div>
        
        <div>
            <a href="/admin/info">従業員情報</a>
        </div>
        
         <div>
            <a href="/admin/setting">管理者情報</a>
        </div>
        
        <div>
            <a href="/admin/logout">ログアウト</a>
        </div>
    </body>
</html>