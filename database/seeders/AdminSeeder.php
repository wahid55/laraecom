<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin
        Admin::create([
            'first_name'        => 'Mohammad',
            'last_name'         => 'Wahid',
            'email'             => 'wahid@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('wahid@gmail.com'),
            'is_super'          => true,
            'remember_token'    => Str::random(10),
        ]);

        // Shop
        Admin::factory()->count(20)->create();
    }
}
