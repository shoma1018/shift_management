@extends('admin.header')
@section('title')
    <title>従業員情報登録</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-10">従業員情報登録</h1>
        <form class="pt-10" action="/admin/info" method="POST">
            @csrf
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      ID
                    </label>
                    <input type="text" name="employee[employee_id]" placeholder="1" value="{{ old('employee.employee_id') }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('employee.id') }}</p>
                </div>
                
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      氏名
                    </label>
                    <input type="text" name="employee[name]" placeholder="山田太郎" value="{{ old('employee.name') }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('employee.name') }}</p>
                </div>
            </div>
            
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      メールアドレス
                    </label>
                    <input type="text" name="employee[email]" placeholder="employee@example.com" value="{{ old('employee.email') }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('employee.email') }}</p>
                </div>
                
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      パスワード
                    </label>
                    <input type="password" name="employee[password]" placeholder="password" value="{{ old('employee.password') }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('employee.password') }}</p>
                </div>
            </div>
            
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      性別
                    </label>
                    <div class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <input type="radio" name="employee[genders]" value = "男性">男性</input>
                        <input type="radio" name="employee[genders]" value = "女性" class="ml-20">女性</input><br>
                    </div>
                    <p class="text-red-500">{{ $errors->first('employee.genders') }}</p>
                </div>
                
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      生年月日
                    </label>
                    <input type="text" name="employee[birthdays]" placeholder="2000-05-10" value="{{ old('employee.birthdays') }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('employee.birthdays') }}</p>
                </div>
            </div>
            
            <div class="flex flex-wrap mx-60 justify-between">
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      入社年月
                    </label>
                    <input type="text" name="employee[date_of_joining_company]" placeholder="2020-06-20" value="{{ old('employee.date_of_joining_company') }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('employee.date_of_joining_company') }}</p>
                </div>
                
                <div class="mb-4 w-[45%]">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                      雇用形態
                    </label>
                    <input type="text" name="employee[employment_status]" placeholder="アルバイト" value="{{ old('employee.employment_status') }}" class = "appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/><br>
                    <p class="text-red-500">{{ $errors->first('employee.employment_status') }}</p>
                </div>
            </div>
            <div class="p-2 w-full">
              <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">登録</button>
            </div>
        </form>
    </body>
@endsection
</html>