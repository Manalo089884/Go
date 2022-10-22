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
            'name' => 'Mark Joseph Manalo',
            'email' => 'markjosephmanalo1110@gmail.com',

            'phone_number' => '09452692274',
            'address' => '283 Ramos Compound Baesa Quezon City',
            'password' => bcrypt('markmark12'),
            'gender' => 'male',
            'age'=>'20'
        ],
        [
            'name' => 'Paul Cedrick Reyes',

            'phone_number' => '09369332354',
            'address' => '281 Ramos Compound Baesa Quezon City',
            'email' => 'programmingmind1110@gmail.com',
            'password' => bcrypt('markmark12'),
            'gender' => 'female',
            'age'=>'22'
        ],
        [
            'name' => 'Gene Vincent Soriano',

            'phone_number' => '09165751961',
            'address' => '282 Ramos Compound Baesa Quezon City',
            'email' => 'gvasoriano@gmail.com',
            'password' => bcrypt('markmark12'),
            'gender' => 'female',
            'age'=>'22'
        ]
    ]);
    }
}
