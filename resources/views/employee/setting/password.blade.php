@extends('employee.header')
@section('title')
    <title>パスワード変更</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-10 mb-5">パスワード変更</h1>
        
        @if(session('error'))
            <p class="text-center text-red-500">{{session('error')}}</p>
        @elseif(session('message'))
            <p class="text-center text-green-500">{{session('message')}}</p>
        @endif
        
        <div class="flex justify-center">
            
            <form action="/employee/setting/password/change" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4 w-[100%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-10">
                      現在のパスワード
                    </label>
                    <input type="password" name="current_password" value = "" size="25" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="flex justify-center text-red-500">{{ $errors->first('current_password') }}</p>
                </div>
                
                <div class="mb-4 w-[100%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-10">
                      新しいパスワード
                    </label>
                    <input type="password" name="new_password" value = "" size="25" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="flex justify-center text-red-500">{{ $errors->first('new_password') }}</p>
                </div>
                
                <div class="mb-4 w-[100%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-10">
                      新しいパスワード(確認)
                    </label>
                    <input type="password" name="confirm_password" value = "" size="25" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="flex justify-center text-red-500">{{ $errors->first('confirm_password') }}</p>
                </div>
                
                <div class="p-2 w-full">
                  <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">変更</button>
                </div>
            </form>
        </div>
    </body>
@endsection