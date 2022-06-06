<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(10)->create();
        //
        //$products = Product::all();
        //
        //foreach ($products as $product) {
        //    # code...
        //    return $product->categories()->attach(Arr::random([1, 2, 3, 4, 5, 6], 2));
        //}
    }
}
