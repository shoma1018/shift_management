<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>従業員ログイン</title>
    </head>
    <body>
        <h1>従業員ログイン</h1>
        @error('login')
        <p>{{$message}}</p>
        @enderror
        
        <form method="POST" action="/employee/login">
            @csrf
            <label>メールアドレス</label>
            <input type="text" name="email"><br>
            <label>パスワード</label>
            <input type="password" name="password"><br>
            <button type="submit">ログイン</button>
        </form>
    </body>
</html>