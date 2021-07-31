<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use App\Models\Setting;
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
        $this->call([
            AdminSeeder::class,
            ShopSeeder::class,
            UserSeeder::class,
            AddressSeeder::class,
            SettingSeeder::class,
            CategorySeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,
            CategoryProductSeeder::class,
        ]);
    }
}
