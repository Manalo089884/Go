<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers') ->insert([
            [
                'firstname' => 'Joseph',
                'lastname' => 'Joseph',
                'email' => 'mark@gmail.com',
                'phone_number' => '09452692274',
                'password' => bcrypt('markmark12'),
                'gender' => 'male',
                'age'=>'20'
            ],
            [
                'firstname' => 's',
                'lastname' => 's',
                'email' => 'marks@gmail.com',
                'phone_number' => '09452692273',
                'password' => bcrypt('markmark12'),
                'gender' => 'male',
                'age'=>'22'
            ]
        ]);
    }
}
