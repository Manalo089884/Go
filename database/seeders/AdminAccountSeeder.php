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
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => 'Mark Joseph Manalo',
            'email' => 'markjosephmanalo1110@gmail.com',
            'roles_id' => 1,
            'phone_number' => '09452692274',
            'address' => '283 Ramos Compound Baesa Quezon City',
            'password' => bcrypt('markmark12'),
=======
            'name' => 'Joseph', 
            'email' => 'markjosephmanalo1110@gmail.com',
            'password' => bcrypt('markmark12'), 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            'name' => 'Mark Joseph Manalo',
            'email' => 'markjosephmanalo1110@gmail.com',
            'roles_id' => 1,
            'phone_number' => '09452692274',
            'address' => '283 Ramos Compound Baesa Quezon City',
            'password' => bcrypt('markmark12'),
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            'gender' => 'male',
            'age'=>'20'
        ],
        [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            'name' => 'Paul Cedrick Reyes',
            'roles_id' => 2,
            'phone_number' => '09369332354',
            'address' => '281 Ramos Compound Baesa Quezon City',
<<<<<<< HEAD
            'email' => 'programmingmind1110@gmail.com',
            'password' => bcrypt('markmark12'),
            'gender' => 'female',
            'age'=>'22'
        ],
        [
            'name' => 'Gene Vincent Soriano',
            'roles_id' => 3,
            'phone_number' => '09165751961',
            'address' => '282 Ramos Compound Baesa Quezon City',
            'email' => 'gvasoriano@gmail.com',
            'password' => bcrypt('markmark12'),
=======
            'name' => 'Marky', 
            'email' => 'programmingmind1110@gmail.com',
            'password' => bcrypt('markmark12'), 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            'email' => 'programmingmind1110@gmail.com',
            'password' => bcrypt('markmark12'),
            'gender' => 'female',
            'age'=>'22'
        ],
        [
            'name' => 'Gene Vincent Soriano',
            'roles_id' => 3,
            'phone_number' => '09165751961',
            'address' => '282 Ramos Compound Baesa Quezon City',
            'email' => 'gvasoriano@gmail.com',
            'password' => bcrypt('markmark12'),
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            'gender' => 'female',
            'age'=>'22'
        ]
    ]);
    }
}
