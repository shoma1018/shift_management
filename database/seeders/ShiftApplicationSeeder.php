<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ShiftApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('shift_applications')->insert([
                'id' => '1',
                'employee_id' => '3',
                'comment' => 'よろしくお願いします',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('shift_applications')->insert([
                'id' => '2',
                'employee_id' => '4',
                'comment' => 'よろしくお願いします',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);

    }
}
