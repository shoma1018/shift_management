@extends('admin.header')
@section('title')
    <title>メールアドレス変更</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-10 mb-5">メールアドレス変更</h1>
        
        @if(session('error'))
            <p class="text-center text-red-500">{{session('error')}}</p>
        @endif
        
        <div class="flex justify-center">
            
            <form action="/admin/setting/email/change" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4 w-[100%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-10">
                      現在のメールアドレス
                    </label>
                    <input type="text" name="current_email" value = "{{ old('current_email')}}" size="25" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="flex justify-center text-red-500">{{ $errors->first('current_email') }}</p>
                </div>
                
                <div class="mb-4 w-[100%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-10">
                      新しいパスワード
                    </label>
                    <input type="text" name="new_email" value = "{{ old('new_email')}}" size="25" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="flex justify-center text-red-500">{{ $errors->first('new_email') }}</p>
                </div>
                
                <div class="mb-4 w-[100%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-10">
                      新しいパスワード(確認)
                    </label>
                    <input type="text" name="confirm_email" value = "{{ old('confirm_email')}}" size="25" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="flex justify-center text-red-500">{{ $errors->first('confirm_email') }}</p>
                </div>
                
                <div class="p-2 w-full">
                  <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">変更</button>
                </div>
            </form>
        </div>
    </body>
@endsection