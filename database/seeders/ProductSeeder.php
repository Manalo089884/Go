<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product') ->insert([
            [
                'name' => 'Glorned Gloves',
                'category_id' => 1,
                'brand_id' => 1,
                'suppliers_id' => 1,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'GLO212',
                'cprice' => 40,
                'sprice' => 80.00,
                'weight' => 30.4,
                'status' => 1,
                'description' => "This is a test product",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Microsuper Gloves',
                'category_id' => 1,
                'brand_id' => 1,
                'suppliers_id' => 1,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MIC101',
                'cprice' => 40,
                'sprice' => 80.00,
                'weight' => 30.4,
                'status' => 1,
                'description' => "This is a test product",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'HCD',
                'category_id' => 1,
                'brand_id' => 1,
                'suppliers_id' => 1,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MIC101',
                'cprice' => 40,
                'sprice' => 80.00,
                'weight' => 30.4,
                'status' => 1,
                'description' => "This is a test product",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
