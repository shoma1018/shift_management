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
                'id' => '1',
                'multi_auth_user_id' => '1',
                'name' => 'admin1',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
                'genders' => '男性',
                'birthdays' => '1980-01-01',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('admins')->insert([
                'id' => '2',
                'multi_auth_user_id' => '2',
                'name' => 'admin2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'genders' => '女性',
                'birthdays' => '1990-02-01',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
