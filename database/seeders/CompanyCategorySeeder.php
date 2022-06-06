<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Database\Seeder;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CompanyCategory::factory(100)->create();
    }
}
