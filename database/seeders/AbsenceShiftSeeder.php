<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AbsenceShiftSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('absence_shifts')->insert([
                'id' => '1',
                'absence_application_id' => '1',
                'date' => '2024-03-05',
                'start_time' => '09:00',
                'end_time' => '12:00',
                'substitute' => 'テスト太郎さん|9:00~12:00',
                'reason' => '私用のため',
         ]);
         
         DB::table('absence_shifts')->insert([
                'id' => '2',
                'absence_application_id' => '2',
                'date' => '2024-03-23',
                'start_time' => '09:00',
                'end_time' => '18:00',
                'substitute' => '未定',
                'reason' => '私用のため',
         ]);
         
         DB::table('absence_shifts')->insert([
                'id' => '3',
                'absence_application_id' => '3',
                'date' => '2024-03-06',
                'start_time' => '10:00',
                'end_time' => '15:00',
                'substitute' => 'テスト太郎さん/10:00~14:00',
                'reason' => '私用のため',
         ]);
         
         DB::table('absence_shifts')->insert([
                'id' => '4',
                'absence_application_id' => '4',
                'date' => '2024-03-31',
                'start_time' => '11:00',
                'end_time' => '20:00',
                'substitute' => '未定',
                'reason' => '私用のため',
         ]);
    }
}
