<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftPatternSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('shift_patterns')->insert([
                'id' => '1',
                'shift_application_id' => '1',
                'day' => '2',
                'start_time' => '09:00',
                'end_time' => '12:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '2',
                'shift_application_id' => '1',
                'day' => '5',
                'start_time' => '09:00',
                'end_time' => '15:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '3',
                'shift_application_id' => '1',
                'day' => '6',
                'start_time' => '09:00',
                'end_time' => '18:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '4',
                'shift_application_id' => '2',
                'day' => '3',
                'start_time' => '10:00',
                'end_time' => '15:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '5',
                'shift_application_id' => '2',
                'day' => '6',
                'start_time' => '12:00',
                'end_time' => '21:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '6',
                'shift_application_id' => '2',
                'day' => '7',
                'start_time' => '11:00',
                'end_time' => '20:00',
         ]);
    }
}
