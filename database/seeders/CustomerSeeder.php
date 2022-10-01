<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
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
                'name' => 'Sofa Rinkashime',
                'email' => 'rinka@gmail.com',
                'phone_number' => '09452692274',
                'password' => bcrypt('markmark12'),
                'gender' => 'male',
                'birthday'=>'6 Dec, 2001',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Shine Rinka',
                'email' => 'shine@gmail.com',
                'phone_number' => '09452692273',
                'password' => bcrypt('markmark12'),
                'gender' => 'male',
                'birthday'=>'6 Dec, 2002',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
