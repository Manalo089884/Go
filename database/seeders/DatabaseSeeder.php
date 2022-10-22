<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(AdminAccountSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
