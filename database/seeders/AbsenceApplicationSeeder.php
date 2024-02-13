<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AbsenceApplicationSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('absence_applications')->insert([
                'id' => '1',
                'employee_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('absence_applications')->insert([
                'id' => '2',
                'employee_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('absence_applications')->insert([
                'id' => '3',
                'employee_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
