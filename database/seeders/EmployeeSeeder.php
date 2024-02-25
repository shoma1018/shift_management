<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;


class EmployeeSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('employees')->insert([
                'id' => '3',
                'multi_auth_user_id' => '3',
                'name' => 'employee1',
                'email' => 'employee1@example.com',
                'password' => Hash::make('password'),
                'genders' => '男性',
                'birthdays' => '2000-10-01',
                'date_of_joining_company' => '2020-07-01',
                'employment_status' => 'アルバイト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('employees')->insert([
                'id' => '4',
                'multi_auth_user_id' => '4',
                'name' => 'employee2',
                'email' => 'employee2@example.com',
                'password' => Hash::make('password'),
                'genders' => '女性',
                'birthdays' => '1990-03-01',
                'date_of_joining_company' => '2021-04-01',
                'employment_status' => 'アルバイト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
