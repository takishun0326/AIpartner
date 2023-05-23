<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lastnames = ['Julia', 'Emma', 'Kishida'];
        $firstnames = ['Mem', 'Watothon', 'Humio'];

        for ($i = 0; $i < count($lastnames); $i++) {
            DB::table('partners')->insert([
                'lastname' => $lastnames[$i],
                'firstname' => $firstnames[$i],
                'age' => 20 + $i,
                'personality' => 'nervous',
                'hobby' => 'Waching movie',
                'introduction' => 'Nice to meet ya!',
            ]);
        }
    }
}
