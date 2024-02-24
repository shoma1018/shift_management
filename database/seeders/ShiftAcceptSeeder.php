<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ShiftAcceptSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('shift_accepts')->insert([
                'id' => '1',
                'shift_application_id' => '1',
                'comment' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('shift_accepts')->insert([
                'id' => '2',
                'shift_application_id' => '2',
                'comment' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
