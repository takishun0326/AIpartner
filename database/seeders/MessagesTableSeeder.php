<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = 1;
        for ($m_id = 1; $m_id <= 3; $m_id++) {
            DB::table('messages')->insert([
                'chat_room_id' => $id,
                'is_user_send' => $m_id % 2,
                'message' => 'Hey Guys! We have a gift for you.',
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
