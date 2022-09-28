<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Brand;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       /* DB::table('brand') ->insert([
            [
                'name' => 'Colgate',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Brush',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Pink',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);*/
      Brand::factory(100)->create();
    }
}
