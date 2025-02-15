<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name' => 'Uncategorized',
            'slug' => 'uncategorized',
            'description' => 'This is uncategory.',
            'parent_id' => null,
            'featured' => false,
            'menu' => false,
        ]);
        Category::factory()->count(19)->create();
    }
}
