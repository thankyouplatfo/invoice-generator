<?php

namespace Database\Seeders;

use App\Models\CompanyCustomer;
use Illuminate\Database\Seeder;

class CompanyCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CompanyCustomer::factory(100)->create();
    }
}
