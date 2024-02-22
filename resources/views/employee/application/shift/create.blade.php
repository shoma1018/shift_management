@extends('employee.header')
@section('title')
    <title>シフト申請</title>
@endsection
@section('content')
    <body>
        <h1 class="text-2xl text-center mt-10">シフト申請</h1>
        
            <form action="/employee/application/shift" method="POST">
                @csrf
                <label class="flex justify-center mt-10">シフト希望</label><br>
                <div class="text-lg text-center mt-2 mr-10">
                    月曜日：<input type="time" list="data-list" name="shift_pattern[start_time1]" min="09:00" max="20:00" class="rounded-lg border border-gray-500"/> ~ <input type="time" list="data-list" name="shift_pattern[end_time1]" min="09:00" max="21:00" class="rounded-lg border border-gray-500"/><br>
                    火曜日：<input type="time" list="data-list" name="shift_pattern[start_time2]" min="09:00" max="20:00" class="rounded-lg border border-gray-500"/> ~ <input type="time" list="data-list" name="shift_pattern[end_time2]" min="09:00" max="21:00" class="rounded-lg border border-gray-500"/><br>
                    水曜日：<input type="time" list="data-list" name="shift_pattern[start_time3]" min="09:00" max="20:00" class="rounded-lg border border-gray-500"/> ~ <input type="time" list="data-list" name="shift_pattern[end_time3]" min="09:00" max="21:00" class="rounded-lg border border-gray-500"/><br>
                    木曜日：<input type="time" list="data-list" name="shift_pattern[start_time4]" min="09:00" max="20:00" class="rounded-lg border border-gray-500"/> ~ <input type="time" list="data-list" name="shift_pattern[end_time4]" min="09:00" max="21:00" class="rounded-lg border border-gray-500"/><br>
                    金曜日：<input type="time" list="data-list" name="shift_pattern[start_time5]" min="09:00" max="20:00" class="rounded-lg border border-gray-500"/> ~ <input type="time" list="data-list" name="shift_pattern[end_time5]" min="09:00" max="21:00" class="rounded-lg border border-gray-500"/><br>
                    土曜日：<input type="time" list="data-list" name="shift_pattern[start_time6]" min="09:00" max="20:00" class="rounded-lg border border-gray-500"/> ~ <input type="time" list="data-list" name="shift_pattern[end_time6]" min="09:00" max="21:00" class="rounded-lg border border-gray-500"/><br>
                    日曜日：<input type="time" list="data-list" name="shift_pattern[start_time7]" min="09:00" max="20:00" class="rounded-lg border border-gray-500"/> ~ <input type="time" list="data-list" name="shift_pattern[end_time7]" min="09:00" max="21:00" class="rounded-lg border border-gray-500"/><br>
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
                <div class="flex justify-center mt-10">
                    <label>コメント</label><br>
                </div>
                <div class="flex flex-wrap mx-80">
                    <textarea name="shift_application[comment]" cols="300" rows="3" class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea><br>
                </div>
                <div class="flex justify-center mt-5">
                    <div class="p-2 w-full">
                      <button type = "submit" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">申請</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
@endsection
