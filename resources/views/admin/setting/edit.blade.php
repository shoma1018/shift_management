@extends('admin.header')
@section('title')
    <title>管理者情報編集</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-10">管理者情報編集</h1>
        <form action="/admin/setting/{{$admin->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="flex justify-center"> 
                <div class="mt-7 mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      氏名
                    </label>
                    <input type="text" name="admin[name]" value = "{{ $admin->name }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('admin.name') }}</p>
                </div>
            </div>
            
            <div class="flex justify-center">
                <div class="mt-5 mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      性別
                    </label>
                    <div class="appearance-none block w-full bg-white text-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <input type="radio" name="admin[genders]" value = "男性" {{ $admin->genders == "男性" ? "checked" : "" }}>男性</input>
                        <input type="radio" name="admin[genders]" value = "女性" {{ $admin->genders == "女性" ? "checked" : "" }} class="ml-20">女性</input><br>
                    </div>
                    <p class="text-red-500">{{ $errors->first('admin.genders') }}</p>
                </div>
            </div>
            
            <div class="flex justify-center">
                <div class="mt-5 mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      生年月日
                    </label>
                    <input type="text" name="admin[birthdays]" value = "{{ $admin->birthdays }}" place class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('admin.birthdays') }}</p>
                </div>
            </div>
            
            <div class="p-2 w-full">
              <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">編集</button>
            </div>
        </form>
    </body>
@endsection