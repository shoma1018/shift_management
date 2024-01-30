<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>シフト投稿</title>
    </head>
    <body>
        <h1>シフト投稿</h1>
        <form action="/admin/dashboard" method="POST" enctype="multipart/form-data">
            @csrf
            <div class ="date">
                <label for="date">シフト投稿日</label>
                <input type="date" name="shift[date]" value=""/>
            </div>
            <div class="image">
                <input type="file" name="shift[image]"/>
            </div>
            <input type="submit" value="投稿"/>
        </form>
    </body>
</html>