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
<<<<<<< HEAD

        $this->call(RoleSeeder::class);
        $this->call(AdminAccountSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
=======
        $this->call(AdminAccountSeeder::class);
=======

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        $this->call(RoleSeeder::class);
        $this->call(AdminAccountSeeder::class);
        $this->call(CustomerSeeder::class);
<<<<<<< HEAD
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }
}
