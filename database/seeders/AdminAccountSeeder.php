<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') ->insert([
        [
            'name' => 'Joseph', 
            'email' => 'markjosephmanalo1110@gmail.com',
            'password' => bcrypt('markmark12'), 
            'gender' => 'male',
            'age'=>'20'
        ],
        [
            'name' => 'Marky', 
            'email' => 'programmingmind1110@gmail.com',
            'password' => bcrypt('markmark12'), 
            'gender' => 'female',
            'age'=>'22'
        ]
    ]);
    }
}
