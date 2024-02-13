<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>欠勤申請</title>
    </head>
    <body>
        <h1>欠勤申請</h1>
        <form action="/employee/application/absence" method="POST">
            @csrf
            <div class = "absence_date">
                <label>欠勤日</label><br>
                <input type = "date" name = "absence_shift[date]" value = ""/>
            </div>
            <div class = "work_time">
                <label>出勤時間</label><br>
                <input type = "time" name = "absence_shift[start_time]" step = "1800"/> ~ 
                <input type = "time" name = "absence_shift[end_time]" step = "1800"/><br>
            </div>
            <div class = "substitute"> 
                <input type = "textarea" name = "absence_shift[substitute]" size = "30" placeholder = "山田太郎さん/9:00~14:00">
            </div>
            <div class = "reason"> 
                <input type = "textarea" name = "absence_shift[reason]" size = "30" placeholder = "私用のため">
            </div>
            <div class = "submit">
                <input type="submit" value="申請"/>
            </div>
        </form>
    </body>
</html>