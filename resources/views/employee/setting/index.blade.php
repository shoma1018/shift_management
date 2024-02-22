@extends('employee.header')
@section('title')
    <title>ユーザー情報</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-10">ユーザー情報</h1>
        
        <div class="container mx-auto">
            <div class="mt-10 ml-40">
                <div class="p-2 w-full">
                  <button type = "submit" class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">
                      <a href="/employee/setting/edit">編集</a>
                  </button>
                </div>
            </div>
        </div>
        
        <div class="mt-20">
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      ID
                    </label>
                    <p class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{$employee->id}}
                    </p>
                </div>
                
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      氏名
                    </label>
                    <p class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{$employee->name}}
                    </p>
                </div>
            </div>
            
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      メールアドレス
                    </label>
                    <p class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{$employee->email}}
                    </p>
                </div>
                
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      性別
                    </label>
                    <p class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{$employee->genders}}
                    </p>
                </div>
            </div>
            
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      生年月日
                    </label>
                    <p class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{$employee->birthdays}}
                    </p>
                </div>
                
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      入社年月
                    </label>
                    <p class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{$employee->date_of_joining_company}}
                    </p>
                </div>
            </div>
            
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      雇用形態
                    </label>
                    <p class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        {{$employee->employment_status}}
                    </p>
                </div>
            </div>
        </div>
    </body>
@endsection