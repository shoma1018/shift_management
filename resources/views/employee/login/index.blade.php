<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>従業員ログイン</title>
        
        <link href = "{{ mix('css/app.css') }}" rel = "stylesheet">
    </head>
    <body>
        <h1 class="text-2xl text-center mt-16">従業員ログイン</h1>
        @error('login')
        <p class="flex justify-center pt-10">{{$message}}</p>
        @enderror
        <div class="flex justify-center">
            <form method="POST" action="/employee/login">
                @csrf
                <div class="mb-4 w-[50%] mt-16">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      メールアドレス
                    </label>
                    <input type="text" name="email" size="25" class="appearance-none block bg-white text-gray-700 border border-gray-400 rounded py-1 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                </div>
                
                <div class="mb-4 w-[50%] mt-16">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      パスワード
                    </label>
                    <input type="password" name="password" size="25 "class = "appearance-none block bg-white text-gray-700 border border-gray-400 rounded py-1 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                </div>
                
                <div class="p-2 w-full mt-16">
                    <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">ログイン</button>
                </div>
            </form>
        </div>
    </body>
</html>