<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
       $this->call([
            MultiAuthUserSeeder::class,
            AdminSeeder::class,
            EmployeeSeeder::class,
            ShiftApplicationSeeder::class,
            ShiftPatternSeeder::class,
            AbsenceApplicationSeeder::class,
            AbsenceShiftSeeder::class,
        ]);
    }
}
