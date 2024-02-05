<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>管理者ログイン</title>
    </head>
    <body>
        <h1>管理者画面トップ</h1>
        <div>
            <a href="/admin/shift/post">シフト投稿</a>
        </div>
        <form action="/admin/dashboard" method="GET" enctype="multipart/form-data">
            @csrf
            <label for="date">シフト検索</label>
            <input type="date" name="date" value="{{$shift->date}}"/>
            <input type="submit" value="検索"/>
        </form>
        
        <div>
            {{$shift->date}}
            <img src="{{ $shift->image_url }}" alt="画像が読み込めません。"/>
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