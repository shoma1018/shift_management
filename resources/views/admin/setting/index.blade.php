@extends('admin.header')
@section('title')
    <title>管理者情報</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-4 mb-1">管理者情報</h1>
        
        <div class="border border-gray-500">
            <div class="mt-4">
                <div class="ml-[10%]">
                  <button type = "submit" class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">
                      <a href="/admin/setting/edit">編集</a>
                  </button>
                </div>
            </div>
            
            
            <div class="flex justify-center">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      ID
                    </label>
                    <div class="border-b-2 border-gray-200">
                        <p class = "py-3 px-4">
                            {{$admin->id}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      氏名
                    </label>
                    <p class = "border-b-2 py-3 px-4">
                        {{$admin->name}}
                    </p>
                </div>
            </div>
                
            <div class="flex justify-center">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      性別
                    </label>
                    <p class = "border-b-2 py-3 px-4">
                        {{$admin->genders}}
                    </p>
                </div>
            </div>
                
            <div class="flex justify-center">
                <div class="mb-10 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      生年月日
                    </label>
                    <p class = "border-b-2 py-3 px-4">
                        {{$admin->birthdays}}
                    </p>
                </div>
            </div>
        </div>
        
        
        <div class="border border-gray-500">
            <div class="mt-4">
                <div class="ml-[10%]">
                  <button type = "submit" class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">
                      <a href="/admin/setting/email">編集</a>
                  </button>
                </div>
            </div>
            
            <div class="flex justify-center">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-2">
                      メールアドレス
                    </label>
                    <p class = "border-b-2 py-3 px-4">
                        {{$admin->email}}
                    </p>
                </div>
            </div>
        </div>
        
    </body>
@endsection