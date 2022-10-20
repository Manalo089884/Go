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
<<<<<<< HEAD

        $this->call(RoleSeeder::class);
        $this->call(AdminAccountSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
=======
        $this->call(AdminAccountSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CustomerSeeder::class);
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    }
}
