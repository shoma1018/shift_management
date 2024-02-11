<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>従業員ログイン</title>
    </head>
    <body>
        <h1>従業員画面トップ</h1>
        
        <div>
            <a href='/employee/application/shift/create/'>シフト申請</a>
        </div>
        
        <div>
            <a href='/employee/application/index/{{$employee->id}}'>申請履歴</a>
        </div>
        
        <form action="/employee/dashboard" method="GET" enctype="multipart/form-data">
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
            <a href="/employee/setting">ユーザー情報</a>
        </div>
        
        <div>
            <a href="/employee/logout">ログアウト</a>
        </div>
    </body>
</html>