<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Supplier;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers') ->insert([
            [
                'name' => 'Colgate',
                'email' => 'supplier1@gmail.com',
                'contact' => '09452692274',
                'address' => '283 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dental Org',
                'email' => 'supplier2@gmail.com',
                'contact' => '09452874489',
                'address' => '281 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dental Inc',
                'email' => 'supplier3@gmail.com',
                'contact' => '09452692274',
                'address' => '284 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dental Sin',
                'email' => 'supplier4@gmail.com',
                'contact' => '09452621223',
                'address' => '261 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Go Sin',
                'email' => 'supplier5@gmail.com',
                'contact' => '09369332354',
                'address' => '280 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'STI',
                'email' => 'supplier6@gmail.com',
                'contact' => '09452692274',
                'address' => '288 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Colgate',
                'email' => 'supplier7@gmail.com',
                'contact' => '09358747858',
                'address' => '289 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dove',
                'email' => 'supplier8@gmail.com',
                'contact' => '09789825587',
                'address' => '211 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Safeguard',
                'email' => 'supplier10@gmail.com',
                'contact' => '09452692274',
                'address' => '209 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Kogie',
                'email' => 'supplier11@gmail.com',
                'contact' => '09872587741',
                'address' => '288 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Microsoft',
                'email' => 'micro@gmail.com',
                'contact' => '09875782245',
                'address' => '212 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Google',
                'email' => 'google@gmail.com',
                'contact' => '09875478987',
                'address' => '257 Ramos Compound Baesa Quezon City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
