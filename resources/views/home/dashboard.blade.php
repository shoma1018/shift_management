<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トップページ</title>
    </head>
    <body>
        <h1>トップページ</h1>
        <div>
            <a href="/admin/login">管理者ログイン</a>
        </div>
        <div>
            <a href="/employee/login">従業員ログイン</a>
        </div>
    </body>
</html>