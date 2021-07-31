<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=500; $i++) {
            $product = Product::find($i);
            $product->categories()->attach(random_int(1, 20));
        }
    }
}
