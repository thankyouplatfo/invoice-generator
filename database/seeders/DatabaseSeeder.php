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
        //
        $this->call([UserSeeder::class]);
        $this->call([CompanySeeder::class]);
        $this->call([CustomerSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([ProductSeeder::class]);
        $this->call([InvoiceSeeder::class]);
        $this->call([CategoryProductSeeder::class]);
        $this->call([CompanyCategorySeeder::class]);
        $this->call([CompanyCustomerSeeder::class]);
    }
}
