<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>シフト申請</title>
    </head>
    <body>
        <h1>シフト申請</h1>
        <form action="/employee/application/shift" method="POST">
            @csrf
            <label>シフト希望</label><br>
            月曜日：<input type="time" name="shift_pattern[start_time1]" min="09:00" max="21:00"/> ~ <input type="time" name="shift_pattern[end_time1]" min="09:00" max="21:00"/><br>
            火曜日：<input type="time" name="shift_pattern[start_time2]" min="09:00" max="21:00"/> ~ <input type="time" name="shift_pattern[end_time2]" min="09:00" max="21:00"/><br>
            水曜日：<input type="time" name="shift_pattern[start_time3]" min="09:00" max="21:00"/> ~ <input type="time" name="shift_pattern[end_time3]" min="09:00" max="21:00"/><br>
            木曜日：<input type="time" name="shift_pattern[start_time4]" min="09:00" max="21:00"/> ~ <input type="time" name="shift_pattern[end_time4]" min="09:00" max="21:00"/><br>
            金曜日：<input type="time" name="shift_pattern[start_time5]" min="09:00" max="21:00"/> ~ <input type="time" name="shift_pattern[end_time5]" min="09:00" max="21:00"/><br>
            土曜日：<input type="time" name="shift_pattern[start_time6]" min="09:00" max="21:00"/> ~ <input type="time" name="shift_pattern[end_time6]" min="09:00" max="21:00"/><br>
            日曜日：<input type="time" name="shift_pattern[start_time7]" min="09:00" max="21:00"/> ~ <input type="time" name="shift_pattern[end_time7]" min="09:00" max="21:00"/><br>
            <label>コメント</label><br>
            <input type="text" name="shift_application[comment]" size="100"><br>
            <input type="submit" value="申請"/>
        </form>
    </body>
</html>