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
                'multi_auth_user_id' => '3',
                'name' => 'employee1',
                'email' => 'employee1@gmail.com',
                'password' => Hash::make('password'),
                'genders' => '男性',
                'birthdays' => '1997-6-12',
                'date_of_joining_company' => '2020-7-1',
                'employment_status' => 'アルバイト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('employees')->insert([
                'multi_auth_user_id' => '4',
                'name' => 'employee2',
                'email' => 'employee2@gmail.com',
                'password' => Hash::make('password'),
                'genders' => '女性',
                'birthdays' => '1999-1-25',
                'date_of_joining_company' => '2021-4-1',
                'employment_status' => 'アルバイト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('employees')->insert([
                'multi_auth_user_id' => '5',
                'name' => 'employee3',
                'email' => 'employee3@gmail.com',
                'password' => Hash::make('password'),
                'genders' => '男性',
                'birthdays' => '2000-5-22',
                'date_of_joining_company' => '2022-5-1',
                'employment_status' => 'アルバイト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
    }
}
