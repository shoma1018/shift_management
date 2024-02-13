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
                'date' => '2024-2-15',
                'start_time' => '9:00',
                'end_time' => '12:00',
                'substitute' => '山田太郎さん/9:00~12:00',
                'reason' => '私用のため',
         ]);
         
         DB::table('absence_shifts')->insert([
                'id' => '2',
                'absence_application_id' => '2',
                'date' => '2024-2-22',
                'start_time' => '9:00',
                'end_time' => '12:00',
                'substitute' => '山田太郎さん/9:00~12:00',
                'reason' => '私用のため',
         ]);
         
         DB::table('absence_shifts')->insert([
                'id' => '3',
                'absence_application_id' => '3',
                'date' => '2024-2-15',
                'start_time' => '10:00',
                'end_time' => '14:00',
                'substitute' => '山田太郎さん/10:00~14:00',
                'reason' => '私用のため',
         ]);
    }
}
