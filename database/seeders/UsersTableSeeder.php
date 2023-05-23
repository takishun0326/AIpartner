<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['takishun', 'hoge', 'huga'];

        foreach ($names as $name) {
            DB::table('users')->insert([
                'user_name' => $name,
                'email' => 'hoge@gmail.com',
                'password' => bcrypt('hoge'),
            ]);
        }
    }
}
