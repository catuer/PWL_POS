<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'user_id' => '1',
                'level_id' => '1',
                'username' => 'Admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => '2',
                'level_id' => '2',
                'username' => 'Manager',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => '3',
                'level_id' => '3',
                'username' => 'staff',
                'nama' => 'staff/kasir',
                'password' => Hash::make('12345'),
            ],

        ];

        DB::table('m_user')->insert($users);
    }
}