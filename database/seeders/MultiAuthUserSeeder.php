<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MultiAuthUserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('multi_auth_users')->insert([
                'id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('multi_auth_users')->insert([
                'id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('multi_auth_users')->insert([
                'id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('multi_auth_users')->insert([
                'id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
    }
}
