<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('admins')->insert([
                'multi_auth_user_id' => '1',
                'name' => 'admin1',
                'email' => 'administrator1@gmail.com',
                'password' => Hash::make('password'),
                'genders' => '男性',
                'birthdays' => '1985-1-12',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('admins')->insert([
                'multi_auth_user_id' => '2',
                'name' => 'admin2',
                'email' => 'administrator2@gmail.com',
                'password' => Hash::make('password'),
                'genders' => '女性',
                'birthdays' => '1990-5-20',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
