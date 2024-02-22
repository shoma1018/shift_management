@extends('employee.header')
@section('title')
    <title>欠勤申請</title>
@endsection
@section('content')
    <body>
        <h1 class = "text-2xl text-center mt-10">欠勤申請</h1>
        <form action="/employee/application/absence" method="POST">
            @csrf
            <label class="flex justify-center mt-7">欠勤日</label><br>
            <div class="text-xl text-center mt-2 mr-8">
                <input type = "date" name = "absence_shift[date]" value = "" class="rounded-lg border border-gray-500"/>
                
            </div>
            
            <div class = "work_time">
                <label class="flex justify-center mt-7">出勤時間</label><br>
                <div class="text-lg text-center mt-2 mr-8">
                    <input type = "time" list="data-list" name = "absence_shift[start_time]" min="09:00" max="20:00" step = "1800" class="rounded-lg border border-gray-500"/> ~ 
                    <input type = "time" list="data-list" name = "absence_shift[end_time]"  min="09:00" max="21:00"step = "1800" class="rounded-lg border border-gray-500"/><br>
                    <datalist id="data-list">
                        <option value="09:00"></option>
                        <option value="09:30"></option>
                        <option value="10:00"></option>
                        <option value="10:30"></option>
                        <option value="11:00"></option>
                        <option value="11:30"></option>
                        <option value="12:00"></option>
                        <option value="12:30"></option>
                        <option value="13:00"></option>
                        <option value="13:30"></option>
                        <option value="14:00"></option>
                        <option value="14:30"></option>
                        <option value="15:00"></option>
                        <option value="15:30"></option>
                        <option value="16:00"></option>
                        <option value="16:30"></option>
                        <option value="17:00"></option>
                        <option value="17:30"></option>
                        <option value="18:00"></option>
                        <option value="18:30"></option>
                        <option value="19:00"></option>
                        <option value="19:30"></option>
                        <option value="20:00"></option>
                        <option value="20:30"></option>
                        <option value="21:00"></option>
                    </datalist>
                </div>
            </div>
            
            <label class="flex justify-center mt-5">代行者</label><br>
            <div class="flex flex-wrap mx-80">
                <input type = "textarea" name = "absence_shift[substitute]" size = "30" placeholder = "山田太郎さん/9:00~14:00" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
            
            
            <label class="flex justify-center mt-5">欠勤理由</label><br>
            <div class="flex flex-wrap mx-80">
                <textarea name="absence_shift[reason]" cols="300" rows="3" placeholder = "私用のため" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea><br>
            </div>
            
            <div class="flex justify-center mt-4">
                <div class="p-2 w-full">
                  <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">申請</button>
                </div>
            </div>
            
        </form>
    </body>
@endsection