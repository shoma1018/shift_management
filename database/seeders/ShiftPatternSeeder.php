<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftPatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shift_patterns')->insert([
                'id' => '1',
                'shift_application_id' => '1',
                'day' => '1',
                'start_time' => '9:00',
                'end_time' => '12:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '2',
                'shift_application_id' => '1',
                'day' => '2',
                'start_time' => '9:00',
                'end_time' => '12:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '3',
                'shift_application_id' => '1',
                'day' => '4',
                'start_time' => '9:00',
                'end_time' => '12:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '4',
                'shift_application_id' => '2',
                'day' => '1',
                'start_time' => '9:00',
                'end_time' => '12:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '5',
                'shift_application_id' => '2',
                'day' => '3',
                'start_time' => '9:00',
                'end_time' => '12:00',
         ]);
         
         DB::table('shift_patterns')->insert([
                'id' => '6',
                'shift_application_id' => '2',
                'day' => '6',
                'start_time' => '9:00',
                'end_time' => '12:00',
         ]);
    }
}
