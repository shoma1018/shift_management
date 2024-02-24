<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AbsenceAcceptSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('absence_accepts')->insert([
                'id' => '1',
                'absence_application_id' => '1',
                'comment' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('absence_accepts')->insert([
                'id' => '2',
                'absence_application_id' => '2',
                'comment' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('absence_accepts')->insert([
                'id' => '3',
                'absence_application_id' => '3',
                'comment' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('absence_accepts')->insert([
                'id' => '4',
                'absence_application_id' => '4',
                'comment' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
